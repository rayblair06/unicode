<?php

/**
  *
  * Example Usage:
  * echo Unicode::RIGHT_ARROW; // Outputs →
  * print_r(Unicode::getAll());
  */
class Unicode
{
    // Arrows
    public const LEFT_ARROW = "\u2190"; // ←
    public const RIGHT_ARROW = "\u2192"; // →
    public const UP_ARROW = "\u2191"; // ↑
    public const DOWN_ARROW = "\u2193"; // ↓
    public const DOUBLE_LEFT_ARROW = "\u21D0"; // ⇐
    public const DOUBLE_RIGHT_ARROW = "\u21D2"; // ⇒
    public const DOUBLE_UP_ARROW = "\u21D1"; // ⇑
    public const DOUBLE_DOWN_ARROW = "\u21D3"; // ⇓
    public const LEFT_RIGHT_ARROW = "\u2194"; // ↔
    public const UP_DOWN_ARROW = "\u2195"; // ↕
    public const CIRCLED_RIGHT_ARROW = "\u21BB"; // ↻
    public const LEFT_HOOK_ARROW = "\u21A9"; // ↩
    public const RIGHT_HOOK_ARROW = "\u21AA"; // ↪
    public const LONG_LEFT_ARROW = "\u27F5"; // ⟵
    public const LONG_RIGHT_ARROW = "\u27F6"; // ⟶
    public const LONG_LEFT_RIGHT_ARROW = "\u27F7"; // ⟷
    public const LEFTWARDS_ARROW_WITH_HOOK = "\u21A9"; // ↩
    public const RIGHTWARDS_ARROW_WITH_HOOK = "\u21AA"; // ↪
    public const NORTH_EAST_ARROW = "\u2197"; // ↗
    public const NORTH_WEST_ARROW = "\u2196"; // ↖
    public const SOUTH_EAST_ARROW = "\u2198"; // ↘
    public const SOUTH_WEST_ARROW = "\u2199"; // ↙
    public const CLOCKWISE_ARROW = "\u21BB"; // ↻
    public const COUNTERCLOCKWISE_ARROW = "\u21BA"; // ↺

    // Mathematical Symbols
    public const INFINITY = "\u221E"; // ∞
    public const SUMMATION = "\u2211"; // ∑
    public const SQUARE_ROOT = "\u221A"; // √
    public const APPROXIMATELY_EQUAL = "\u2248"; // ≈
    public const NOT_EQUAL = "\u2260"; // ≠
    public const LESS_THAN_EQUAL = "\u2264"; // ≤
    public const GREATER_THAN_EQUAL = "\u2265"; // ≥
    public const PI_SYMBOL = "\u03C0"; // π
    public const MULTIPLICATION = "\u00D7"; // ×
    public const DIVISION = "\u00F7"; // ÷
    public const PLUS_MINUS = "\u00B1"; // ±
    public const INTEGRAL = "\u222B"; // ∫
    public const PARTIAL_DIFFERENTIAL = "\u2202"; // ∂
    public const ELEMENT_OF = "\u2208"; // ∈
    public const NOT_ELEMENT_OF = "\u2209"; // ∉
    public const UNION = "\u222A"; // ∪
    public const INTERSECTION = "\u2229"; // ∩
    public const FOR_ALL = "\u2200"; // ∀
    public const THERE_EXISTS = "\u2203"; // ∃
    public const EMPTY_SET = "\u2205"; // ∅
    public const SUBSET_OF = "\u2282"; // ⊂
    public const SUPERSET_OF = "\u2283"; // ⊃
    public const SUBSET_OR_EQUAL = "\u2286"; // ⊆
    public const SUPERSET_OR_EQUAL = "\u2287"; // ⊇
    public const LOGICAL_AND = "\u2227"; // ∧
    public const LOGICAL_OR = "\u2228"; // ∨
    public const LOGICAL_NOT = "\u00AC"; // ¬
    public const THEREFORE = "\u2234"; // ∴
    public const BECAUSE = "\u2235"; // ∵

    // Currency Symbols
    public const DOLLAR_SIGN = "\u0024"; // $
    public const EURO_SIGN = "\u20AC"; // €
    public const POUND_SIGN = "\u00A3"; // £
    public const YEN_SIGN = "\u00A5"; // ¥
    public const INDIAN_RUPEE_SIGN = "\u20B9"; // ₹
    public const BITCOIN_SIGN = "\u20BF"; // ₿
    public const WON_SIGN = "\u20A9"; // ₩
    public const SHEKEL_SIGN = "\u20AA"; // ₪
    public const CENT_SIGN = "\u00A2"; // ¢

    // Emojis
    public const SMILEY_FACE = "\u263A"; // ☺
    public const HEART = "\u2764"; // ❤
    public const STAR = "\u2605"; // ★
    public const FIRE = "\u1F525"; // 🔥
    public const THUMBS_UP = "\u1F44D"; // 👍
    public const CLAPPING_HANDS = "\u1F44F"; // 👏
    public const PARTY_POPPER = "\u1F389"; // 🎉
    public const THINKING_FACE = "\u1F914"; // 🤔
    public const FACE_WITH_TEARS_OF_JOY = "\u1F602"; // 😂
    public const CRYING_FACE = "\u1F622"; // 😢
    public const RED_HEART = "\u2764"; // ❤️
    public const BROKEN_HEART = "\u1F494"; // 💔
    public const CHECK_MARK_BUTTON = "\u2705"; // ✅
    public const CROSS_MARK_BUTTON = "\u274C"; // ❌

    // Shapes and Symbols
    public const BLACK_CIRCLE = "\u25CF"; // ●
    public const WHITE_CIRCLE = "\u25CB"; // ○
    public const BLACK_SQUARE = "\u25A0"; // ■
    public const WHITE_SQUARE = "\u25A1"; // □
    public const TRIANGLE_UP = "\u25B2"; // ▲
    public const TRIANGLE_DOWN = "\u25BC"; // ▼
    public const DIAMOND = "\u25C6"; // ◆
    public const SPADE = "\u2660"; // ♠
    public const HEART_SHAPE = "\u2665"; // ♥
    public const CLUB = "\u2663"; // ♣
    public const DIAMOND_SHAPE = "\u2666"; // ♦
    public const BLACK_STAR = "\u2605"; // ★
    public const WHITE_STAR = "\u2606"; // ☆
    public const INVERSE_BULLET = "\u25D8"; // ◘
    public const LOZENGE = "\u25CA"; // ◊
    public const BLACK_LOZENGE = "\u29EB"; // ⧫

    // Miscellaneous
    public const CHECK_MARK = "\u2713"; // ✓
    public const CROSS_MARK = "\u2717"; // ✗
    public const COPYRIGHT = "\u00A9"; // ©
    public const REGISTERED = "\u00AE"; // ®
    public const TRADEMARK = "\u2122"; // ™
    public const SECTION = "\u00A7"; // §
    public const PILCROW = "\u00B6"; // ¶
    public const DEGREE = "\u00B0"; // °
    public const BULLET = "\u2022"; // •
    public const ELLIPSIS = "\u2026"; // …
    public const PRIME = "\u2032"; // ′
    public const DOUBLE_PRIME = "\u2033"; // ″
    public const PER_MILLE = "\u2030"; // ‰
    public const INFINITY_SYMBOL = "\u221E"; // ∞
    public const ANGLE = "\u2220"; // ∠
    public const CONGRUENT = "\u2245"; // ≅
    public const NOT_EQUAL_TO = "\u2260"; // ≠

    // Additional Symbols
    public const MUSIC_NOTE = "\u266A"; // ♪
    public const EIGHTH_NOTE = "\u266B"; // ♫
    public const HOT_BEVERAGE = "\u2615"; // ☕
    public const WARNING_SIGN = "\u26A0"; // ⚠
    public const RADIOACTIVE = "\u2622"; // ☢
    public const BIOHAZARD = "\u2623"; // ☣
    public const PEACE_SYMBOL = "\u262E"; // ☮
    public const YIN_YANG = "\u262F"; // ☯
    public const HAMMER_AND_PICK = "\u2692"; // ⚒


    // Typography and Punctuation
    public const EN_DASH = "\u2013"; // –
    public const EM_DASH = "\u2014"; // —
    public const SINGLE_QUOTE_LEFT = "\u2018"; // '
    public const SINGLE_QUOTE_RIGHT = "\u2019"; // '
    public const DOUBLE_QUOTE_LEFT = "\u201C"; // "
    public const DOUBLE_QUOTE_RIGHT = "\u201D"; // "
    public const DAGGER = "\u2020"; // †
    public const DOUBLE_DAGGER = "\u2021"; // ‡

    /**
     * Returns a list of all Unicode constants in this class.
     */
    public static function getAll(): array
    {
        $reflection = new \ReflectionClass(__CLASS__);
        
        return $reflection->getConstants();
    }
}
