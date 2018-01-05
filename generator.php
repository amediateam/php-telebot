<?php
$schema = require "schema.php";
$quote = function ($name) {
    return sprintf("'%s'", addslashes($name));
};
$defined_types = ['integer', 'string', 'boolean', 'float'];

function toCamelCase($str)
{
    return str_replace(" ", "", ucwords(str_replace("_", " ", $str)));
}

function generateReference($name, $isType)
{
    ob_start();
    echo '<?php' . "\n";
    if ($isType) {
        echo 'namespace TelegramBot\Api\Types;' . PHP_EOL;
        echo 'use TelegramBot\Api\Generated\Types;' . "\n";
    } else {
        echo 'namespace TelegramBot\Api\Methods;' . PHP_EOL;
        echo 'use TelegramBot\Api\Generated\Methods;' . "\n";
    }
    echo 'class ' . $name . ' extends ' . ($isType ? 'Types\\' : 'Methods\\') . $name . "\n";
    echo "{\n";

    echo "\n\n\n";

    echo "}\n";
    return ob_get_clean();
}

function generateDoc($className, $data, $isType)
{
    global $schema, $defined_types;
    $string = "/**\n";
    foreach ($data['map'] as $key => $type) {
        $returnType = null;
        $itemType = null;
        if ($isType && isset($schema['types'][$className])) {
            $returnType = '\\TelegramBot\\Api\\Types\\' . $className;
        }
        if (!$isType) {
            $returnType = '\\TelegramBot\\Api\\Methods\\' . $className;
        }
        if (is_array($type)) {
            $types = array_map(function ($x) use ($defined_types, $isType) {
                if (in_array(strtolower($x), $defined_types)) {
                    return strtolower($x);
                }
                $itemType = getMappedValue($x, $isType);
                if (strpos($itemType, 'ArrayOf') !== false) {
                    $itemType = fixArrayOfType($itemType);
                }
                return $itemType;
            }, $type);
            $itemType = implode("|", $types);
        } else if (in_array(strtolower($type), $defined_types)) {
            $itemType = getMappedValue($type, $isType);
        } else {
            $itemType = getMappedValue($type, $isType);
            if (strpos($itemType, 'ArrayOf') !== false) {
                $itemType = fixArrayOfType($itemType);
            }
        }
        $camelCased = toCamelCase($key);
        $key = lcfirst(toCamelCase($key));


        $itemType = str_replace("'", '', $itemType);

        if (!empty($itemType)) {
            $itemType .= ' ';
        }
        if (!empty($returnType)) {
            $returnType .= ' ';
        }

        if (array_key_exists($key, $data['defaultData'])) {
            $string .= " * @method {$returnType}set{$camelCased}({$itemType}\${$key} = '" . addslashes($data['defaultData'][$key]) . "')\n";
        } else {
            $string .= " * @method {$returnType}set{$camelCased}({$itemType}\${$key})\n";
        }
        $string .= " * @method {$itemType}get{$camelCased}()\n";
    }
    $string .= "*/\n";
    return $string;
}

function getMappedValue($tt, $isType, $useClassStatic = false)
{
    global $schema, $defined_types;
    if (strpos($tt, 'ArrayOf') !== false) {
        return '\TelegramBot\Api\Iterators\\' . $tt . ($useClassStatic ? '::class' : '');
    } else if (strpos($tt, 'InputFile') !== false) {
        return '\TelegramBot\Api\Extension\\InputFile' . ($useClassStatic ? '::class' : '');
    } else if (isset($schema['types'][$tt])) {
        return '\TelegramBot\Api\Types\\' . $tt . ($useClassStatic ? '::class' : '');
    } else if (in_array(strtolower($tt), $defined_types)) {
        return sprintf("'%s'", addslashes(strtolower($tt)));
    }
    return sprintf("%s", $tt);
}

function getReturnType($rType, $useStaticClass = false)
{
    if (is_array($rType)) {
        $returnType = [];
        foreach ($rType as $subType) {
            $returnType[] = getMappedValue($subType, false, $useStaticClass);
        }
    } else {
        $returnType = [getMappedValue($rType, false, $useStaticClass)];
    }
    return $returnType;
}

function fixArrayOfType($type, $parameter = false, $returnType = false, $isDocumentReturnType = false)
{
    $type = basename($type);
    $map = [
        'ArrayOfString' => 'string',
        'ArrayOfShippingOption' => '\\TelegramBot\\Api\\Types\\ShippingOption',
        'ArrayOfInlineQueryResult' => '\\TelegramBot\\Api\\Types\\InlineQueryResult',
        'ArrayOfUpdate' => '\\TelegramBot\\Api\\Types\\Update',
        'ArrayOfUser' => '\\TelegramBot\\Api\\Types\\User',
        'ArrayOfSticker' => '\\TelegramBot\\Api\\Types\\Sticker',
        'ArrayOfPhotoSize' => '\\TelegramBot\\Api\\Types\\PhotoSize',
        'ArrayOfMessageEntity' => '\\TelegramBot\\Api\\Types\\MessageEntity',
        'ArrayOfLabeledPrice' => '\\TelegramBot\\Api\\Types\\LabeledPrice',
        'ArrayOfKeyboardButton' => '\\TelegramBot\\Api\\Types\\KeyboardButton',
        'ArrayOfInlineKeyboardButton' => '\\TelegramBot\\Api\\Types\\InlineKeyboardButton',
        'ArrayOfChatMember' => '\\TelegramBot\\Api\\Types\\ChatMember',
        'ArrayOfInputMedia' => '\\TelegramBot\\Api\\Types\\InputMedia',
        'ArrayOfMessage' => '\\TelegramBot\\Api\\Types\\Message',
        'ArrayOfArrayOfPhotoSize' => '\\TelegramBot\\Api\\Types\\ArrayOfPhotoSize',
        'ArrayOfArrayOfKeyboardButton' => '\\TelegramBot\\Api\\Types\\ArrayOfKeyboardButton',
        'ArrayOfArrayOfInlineKeyboardButton' => '\\TelegramBot\\Api\\Types\\ArrayOfInlineKeyboardButton',
    ];
    if (isset($map[$type])) {
        return $parameter ? 'array' : $map[$type] . ($returnType ? ($isDocumentReturnType ? '' : '::class') : '[]');
    }
    return $type;
}

function generateMethodFunctionsMethodsAndTypesDoc()
{
    global $schema, $defined_types;
    $methodMap = $typeMap = [];
    for ($zz = 0; $zz <= 1; ++$zz) {
        $isType = $zz == 1;
        foreach ($schema[$isType ? 'types' : 'methods'] as $method => $declaration) {
            if ($isType && (!isset($declaration['creatable']) || !$declaration['creatable'])) {
                continue;
            }
            $returnType = null;
            $parameters = "";
            $paramsArray = $declaration['requiredParams'];
            foreach ($declaration['map'] as $key => $val) {
                if (in_array($key, $declaration['requiredParams'])) continue;
                $paramsArray[] = $key;
            }
            foreach ($paramsArray as $parameter) {
                if (in_array(strtolower($parameter), $defined_types)) {
                    echo $method;
                    exit("Oops");
                }
                $parameterType = $declaration['map'][$parameter];
                if (!empty($parameters)) $parameters .= ', ';
                if (is_array($parameterType)) {
                    $type = [];
                    foreach ($parameterType as $subType) {
                        $type[] = getMappedValue($subType, false);
                    }
                    $type = implode("|", $type);
                } else {
                    $type = getMappedValue($parameterType, false);
                }
                $type = str_replace("'", null, $type);
                $required = in_array($parameter, $declaration['requiredParams']);
                $parameter = lcfirst(toCamelCase($parameter));
                $defaultValue = '';
                if (isset($declaration['defaultData'][$method])) {
                    $defaultValue = $declaration['defaultData'][$method];
                } else if (!$required && is_string($parameterType)) {
                    $typeLower = strtolower($parameterType);
                    if (in_array($typeLower, ['integer', 'string'])) {
                        $defaultValue = 'null';
                    } else if ($typeLower == 'boolean') {
                        $defaultValue = 'false';
                    } else if (strpos($parameterType, 'ArrayOf') !== false) {
                        $defaultValue = '[]';
                    }
                } else if (!$required) {
                    $defaultValue = 'null';
                }
                if (strpos($type, 'ArrayOf') !== false) {
                    $type = fixArrayOfType($type, true);
                }
                if (!empty($defaultValue) && !$required) {
                    $parameters .= sprintf("%s%s = %s", $type, (empty($type) ? '' : ' ') . '$' . $parameter, $defaultValue);
                } else {
                    $parameters .= sprintf('%s%s', $type, (empty($type) ? '' : ' ') . '$' . $parameter);
                }
            }
            if ($isType) {
                $typeInCamelCase = toCamelCase($method);
                $returnType = str_replace("'", null, implode("|", getReturnType($method)));
                $typeMap[$method] = [
                    'returnType' => getReturnType($method, true),
                    'paramsMap' => array_keys($declaration['map']),
                ];
                if (!empty($returnType)) $returnType .= ' ';
                echo "* @method {$returnType}create$typeInCamelCase($parameters)\n";
            } else {
                $typeInCamelCase = toCamelCase($method);
                $returnType = str_replace("'", null, implode("|", getReturnType($declaration['returnType'])));
                $methodMap[$method] = [
                    'returnType' => getReturnType($declaration['returnType'], true),
                    'paramsMap' => array_keys($declaration['map']),
                ];
                if (strpos($returnType, 'ArrayOf') !== false) {
                    $returnType = fixArrayOfType($returnType, false, false, true);
                }
                if (!empty($returnType)) $returnType .= ' ';
                echo "* @method {$returnType}$method($parameters)\n";
                $methodMap[$method . 'Async'] = [
                    'returnType' => ['\GuzzleHttp\Promise\PromiseInterface::class'],
                    'paramsMap' => array_keys($declaration['map']),
                ];
                echo "* @method \GuzzleHttp\Promise\PromiseInterface {$method}Async($parameters)\n";
                echo "* @method \TelegramBot\Api\Methods\{$method} init$typeInCamelCase($parameters)\n";
            }
        }
    }

    return [
        $typeMap,
        $methodMap
    ];
}

function generateMethodFunctions()
{
    ob_start();
    echo '<?php' . PHP_EOL;
    echo 'namespace TelegramBot\Api;' . PHP_EOL;
    echo "/**\n";
    list($typeMap, $methodMap) = generateMethodFunctionsMethodsAndTypesDoc();
    echo "*/\n";
    echo 'class MethodFunctions';
    echo "{\n";
    {
        echo "\t" . 'protected $methodMap = [' . "\n";
        foreach ($methodMap as $method => $map) {
            echo "\t\t" . sprintf("'%s' => [\n", $method);
            echo "\t\t\t'returnType' => [\n";
            foreach ($map['returnType'] as $type) {
                echo sprintf("\t\t\t\t%s,\n", $type);
            }
            echo "\t\t\t],\n";
            {
                echo "\t\t\t'paramsMap' => [\n";
                foreach ($map['paramsMap'] as $key) {
                    echo sprintf("\t\t\t\t'%s',\n", $key);
                }
                echo "\t\t\t],\n";
            }

            echo "\t\t],\n";
        }
        echo "\t];\n";
    }
    {
        echo "\t" . 'protected $typeMap = [' . "\n";
        foreach ($typeMap as $method => $map) {
            echo "\t\t" . sprintf("'%s' => [\n", $method);
            echo "\t\t\t'returnType' => [\n";
            foreach ($map['returnType'] as $type) {
                echo sprintf("\t\t\t\t%s,\n", $type);
            }
            echo "\t\t\t],\n";
            {
                echo "\t\t\t'paramsMap' => [\n";
                foreach ($map['paramsMap'] as $key) {
                    echo sprintf("\t\t\t\t'%s',\n", $key);
                }
                echo "\t\t\t],\n";
            }

            echo "\t\t],\n";
        }
        echo "\t];\n";
    }
    echo "}\n";
    return ob_get_clean();
}


function generateDefaultData($defaultData, $isType)
{
    $string = null;
    $string .= "\t" . 'static protected $defaultData = [' . PHP_EOL;
    foreach ($defaultData as $t => $tt) {
        if (!isset($typeInfo['map'][$t])) continue;
        $string .= "\t\t" . sprintf("'%s' => %s", $t, sprintf("'%s'", addslashes($tt))) . "\n";
    }
    $string .= "\t];\n";
    return $string;
}

function generateRequiredParams($requiredParams, $isType)
{
    global $quote;
    $string = null;
    $string .= "\t" . 'static protected $requiredParams = [' . PHP_EOL;
    $string .= "\t\t" . implode(",\n\t\t", array_map($quote, $requiredParams)) . PHP_EOL;
    $string .= "\t];\n";
    return $string;
}

function generateConstants($constants)
{
    $string = null;

    foreach ($constants as $name => $value) {
        if (is_string($value)) {
            $value = sprintf("'%s'", addslashes($value));
        }
        $string .= sprintf("\tconst %s = %s;\n", $name, $value);
    }
    return $string;
}

function generateMap($mapArray, $isType)
{
    $string = null;
    $string .= "\t" . 'static protected $map = [' . PHP_EOL;
    foreach ($mapArray as $t => $map) {
        if (is_array($map)) {
            $tt = '[' . "\n";
            foreach ($map as $z) {
                $tt .= "\t\t\t" . getMappedValue($z, false, true) . ",\n";
            }
            $tt .= "\t\t" . ']';
        } else {
            $tt = getMappedValue($map, false, true);
        }
        $string .= "\t\t" . sprintf("'%s' => %s", $t, $tt) . ",\n";
    }
    $string .= "\t];\n";
    return $string;
}

function generateType($type)
{
    global $schema;
    ob_start();
    $typeInfo = $schema['types'][$type];
    if (!isset($typeInfo['requiredParams'])) {
        $typeInfo['requiredParams'] = [];
    }
    if (!isset($typeInfo['defaultData'])) {
        $typeInfo['defaultData'] = [];
    }
    if (!isset($typeInfo['constants'])) {
        $typeInfo['constants'] = [];
    }
    echo '<?php' . PHP_EOL;
    echo 'namespace TelegramBot\Api\Generated\Types;' . PHP_EOL;
    echo 'use TelegramBot\Api\BaseType;' . PHP_EOL;
    echo 'use TelegramBot\Api\TypeInterface;' . PHP_EOL;
    echo generateDoc($type, $typeInfo, true);
    echo 'class ' . $type . ' extends BaseType implements TypeInterface' . PHP_EOL;
    echo '{' . PHP_EOL;
    echo generateConstants($typeInfo['constants']);
    echo generateRequiredParams($typeInfo['requiredParams'], true);
    echo generateMap($typeInfo['map'], true);
    echo generateDefaultData($typeInfo['defaultData'], true);
    echo '}' . PHP_EOL;
    return ob_get_clean();
}

function generateMethod($type)
{
    global $schema;
    ob_start();
    $typeInfo = $schema['methods'][$type];
    if (!isset($typeInfo['requiredParams'])) {
        $typeInfo['requiredParams'] = [];
    }
    if (!isset($typeInfo['defaultData'])) {
        $typeInfo['defaultData'] = [];
    }
    if (!isset($typeInfo['constants'])) {
        $typeInfo['constants'] = [];
    }
    echo '<?php' . PHP_EOL;
    echo 'namespace TelegramBot\Api\Generated\Methods;' . PHP_EOL;
    echo 'use TelegramBot\Api\BaseMethod;' . PHP_EOL;
    echo generateDoc($type, $typeInfo, false);
    echo 'class ' . $type . ' extends BaseMethod' . PHP_EOL;
    echo '{' . PHP_EOL;
    echo "\t" . 'protected $method = \'' . $type . '\';' . "\n";
    echo generateConstants($typeInfo['constants']);
    echo generateRequiredParams($typeInfo['requiredParams'], false);
    echo generateMap($typeInfo['map'], false);
    echo generateDefaultData($typeInfo['defaultData'], false);
    echo '}' . PHP_EOL;
    return ob_get_clean();
}

foreach ($schema['types'] as $type => &$declaration) {
    file_put_contents("./src/Generated/Types/$type.php", generateType($type));
}
foreach ($schema['methods'] as $method => &$declaration) {
    file_put_contents("./src/Generated/Methods/$method.php", generateMethod($method));
}
file_put_contents("./src/MethodFunctions.php", generateMethodFunctions());
foreach ($schema['types'] as $type => $declaration) {
    $filename = "./src/Types/$type.php";
    if (!is_file($filename)) {
        file_put_contents($filename, generateReference($type, true));
    }
}
foreach ($schema['methods'] as $method => $declaration) {
    $filename = "./src/Methods/$method.php";
    if (!is_file($filename)) {
        file_put_contents($filename, generateReference($method, false));
    }
}