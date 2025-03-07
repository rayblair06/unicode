<?php

declare(strict_types=1);

namespace Rayblair\Unicode;

/**
 * BaseUnicode provides utility functions for working with Unicode constants.
 */
class BaseUnicode
{
    /**
     * Returns a list of all Unicode constants in this class.
     *
     * @return array<string, string> An associative array of constant names and their values.
     */
    public static function getAll(): array
    {
        $reflection = new \ReflectionClass(static::class);

        return $reflection->getConstants();
    }

    /**
     * Returns a subset of Unicode constants up to the given count.
     *
     * @param int $count The number of constants to return.
     * @return array<string, string> A slice of the constants array.
     */
    public static function get(int $count): array
    {
        return array_slice(self::getAll(), 0, $count, true);
    }

    /**
     * Returns a subset of Unicode constants within the given range.
     *
     * @param string|int $start The Unicode number (hex) to start from.
     * @param string|int $end   The Unicode number (hex) to end at.
     * @return array<string, string> A slice of the constants array.
     */
    public static function range(string $start, string $end): array
    {
        $unicodes = array_values(static::getAll());

        // Convert Unicode code point to character
        $startChar = mb_chr(hexdec($start), 'UTF-8');
        $endChar = mb_chr(hexdec($end), 'UTF-8');

        // Ensure valid conversion
        if ($startChar === false || $endChar === false) {
            return [];
        }

        // Get start and end index
        $startIndex = array_search($startChar, $unicodes, true);
        $endIndex = array_search($endChar, $unicodes, true);

        // Validate indices
        if ($startIndex === false || $endIndex === false || $startIndex > $endIndex) {
            return [];
        }

        // Slice the constants array (length = endIndex - startIndex + 1 for inclusive range)
        return array_slice(static::getAll(), $startIndex, ($endIndex - $startIndex) + 1, true);
    }

    /**
     * Converts UTF-8 characters into Unicode escape sequences (\uXXXX).
     *
     * This function replaces UTF-8 characters with their corresponding Unicode escape sequences.
     *
     * @param string $utf8String The input string containing UTF-8 characters.
     * @return string The encoded string with Unicode escape sequences.
     */
    public static function escape(string $utf8String): string
    {
        return preg_replace_callback('/./u', function (array $match): string {
            $codepoint = mb_ord($match[0], 'UTF-8');

            return sprintf('\u%04X', $codepoint);
        }, $utf8String);
    }
}
