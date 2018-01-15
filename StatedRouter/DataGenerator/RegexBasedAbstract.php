<?php

namespace StatedRouter\DataGenerator;

use StatedRouter\DataGenerator;
use StatedRouter\BadRouteException;
use StatedRouter\Route;

abstract class RegexBasedAbstract implements DataGenerator
{
    /** @var mixed[][] */
    protected $staticRoutes = [];

    /** @var Route[] */
    protected $regexToRoutesMapArray = [];

    /**
     * @return int
     */
    protected abstract function getApproxChunkSize();

    /**
     * @return mixed[]
     */
    protected abstract function processChunk($regexToRoutesMap);

    public function addRoute($routeData, $handler)
    {
        if ($this->isStaticRoute($routeData)) {
            $this->addStaticRoute($routeData, $handler);
        } else {
            $this->addVariableRoute($routeData, $handler);
        }
    }

    /**
     * @return mixed[]
     */
    public function getData()
    {
        if (empty($this->regexToRoutesMapArray)) {
            return [$this->staticRoutes, []];
        }

        return [$this->staticRoutes, $this->generateVariableRouteData()];
    }

    /**
     * @return mixed[]
     */
    private function generateVariableRouteData()
    {
        $chunkSize = $this->computeChunkSize(count($this->regexToRoutesMapArray));
        $chunks = array_chunk($this->regexToRoutesMapArray, $chunkSize, true);
        return array_map([$this, 'processChunk'], $chunks);
    }

    /**
     * @param int
     * @return int
     */
    private function computeChunkSize($count)
    {
        $numParts = max(1, round($count / $this->getApproxChunkSize()));
        return (int)ceil($count / $numParts);
    }

    /**
     * @param mixed[]
     * @return bool
     */
    private function isStaticRoute($routeData)
    {
        return count($routeData) === 1 && is_string($routeData[0]);
    }

    private function addStaticRoute($routeData, $handler)
    {
        $routeStr = $routeData[0];

        if (isset($this->staticRoutes[$routeStr])) {
            throw new BadRouteException(sprintf(
                'Cannot register two routes matching "%s"',
                $routeStr
            ));
        }

        $this->staticRoutes[$routeStr] = $handler;
    }

    private function addVariableRoute($routeData, $handler)
    {
        list($regex, $variables) = $this->buildRegexForRoute($routeData);

        if (isset($this->regexToRoutesMapArray[$regex])) {
            throw new BadRouteException(sprintf(
                'Cannot register two routes matching "%s"',
                $regex
            ));
        }

        $this->regexToRoutesMapArray[$regex] = new Route(
            $handler, $regex, $variables
        );
    }

    /**
     * @param mixed[]
     * @return mixed[]
     */
    private function buildRegexForRoute($routeData)
    {
        $regex = '';
        $variables = [];
        foreach ($routeData as $part) {
            if (is_string($part)) {
                $regex .= preg_quote($part, '~');
                continue;
            }

            list($varName, $regexPart) = $part;

            if (isset($variables[$varName])) {
                throw new BadRouteException(sprintf(
                    'Cannot use the same placeholder "%s" twice', $varName
                ));
            }

            if ($this->regexHasCapturingGroups($regexPart)) {
                throw new BadRouteException(sprintf(
                    'Regex "%s" for parameter "%s" contains a capturing group',
                    $regexPart, $varName
                ));
            }

            $variables[$varName] = $varName;
            $regex .= '(' . $regexPart . ')';
        }

        return [$regex, $variables];
    }

    /**
     * @param string
     * @return bool
     */
    private function regexHasCapturingGroups($regex)
    {
        if (false === strpos($regex, '(')) {
            // Needs to have at least a ( to contain a capturing group
            return false;
        }

        // Semi-accurate detection for capturing groups
        return (bool)preg_match(
            '~
                (?:
                    \(\?\(
                  | \[ [^\]\\\\]* (?: \\\\ . [^\]\\\\]* )* \]
                  | \\\\ .
                ) (*SKIP)(*FAIL) |
                \(
                (?!
                    \? (?! <(?![!=]) | P< | \' )
                  | \*
                )
            ~x',
            $regex
        );
    }
}
