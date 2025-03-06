# Unicode PHP Class

A well-structured and easy-to-use PHP class providing access to a variety of Unicode symbols, including arrows, mathematical symbols, currency symbols, emojis, shapes, Greek letters, and miscellaneous symbols. This class simplifies the use of common Unicode characters in PHP applications, console outputs, and web development.

---

## ⚡ Features

- Easy access to a wide range of Unicode characters
- Organized constants for better usability, covering:
  - **Arrows**
  - **Mathematical Symbols**
  - **Currency Symbols**
  - **Emojis**
  - **Shapes and Symbols**
  - **Miscellaneous Symbols**
  - **Typography and Punctuation**
- Method to retrieve all Unicode constants in the class

---

## 🚀 Installation

1. Install via Composer:

```bash
composer require rayblair/unicode
```

---

## 📚 Usage

### Basic Usage
```php
use Rayblair\Unicode;

// Output a right arrow
echo Unicode::RIGHT_ARROW; // Outputs →

// Output a smiley face emoji
echo Unicode::SMILEY_FACE; // Outputs ☺

// Output a heart symbol
echo Unicode::HEART; // Outputs ❤
```

### Get All Unicode Constants
```php
$allUnicodes = Unicode::getAll();

print_r($allUnicodes);
```

### Get Escaped Unicode Sequences 
```php
echo Unicode::escape(Unicode::RIGHT_ARROW); // Outputs \u2190
```

---

## 🔥 Available Categories

### **Arrows**
- `LEFT_ARROW` ←
- `RIGHT_ARROW` →
- `UP_ARROW` ↑
- `DOWN_ARROW` ↓
- `DOUBLE_LEFT_ARROW` ⇐
- `DOUBLE_RIGHT_ARROW` ⇒
- `DOUBLE_UP_ARROW` ⇑
- `DOUBLE_DOWN_ARROW` ⇓
- `LEFT_RIGHT_ARROW` ↔
- `UP_DOWN_ARROW` ↕
- `CLOCKWISE_ARROW` ↻
- `COUNTERCLOCKWISE_ARROW` ↺

### **Mathematical Symbols**
- `INFINITY` ∞
- `SUMMATION` ∑
- `SQUARE_ROOT` √
- `APPROXIMATELY_EQUAL` ≈
- `NOT_EQUAL` ≠
- `LESS_THAN_EQUAL` ≤
- `GREATER_THAN_EQUAL` ≥
- `PI_SYMBOL` π
- `MULTIPLICATION` ×
- `DIVISION` ÷
- `PLUS_MINUS` ±
- `LOGICAL_AND` ∧
- `LOGICAL_OR` ∨

### **Currency Symbols**
- `DOLLAR_SIGN` $
- `EURO_SIGN` €
- `POUND_SIGN` £
- `YEN_SIGN` ¥
- `BITCOIN_SIGN` ₿
- `WON_SIGN` ₩
- `SHEKEL_SIGN` ₪

### **Emojis**
- `SMILEY_FACE` ☺
- `HEART` ❤
- `STAR` ★
- `FIRE` 🔥
- `THUMBS_UP` 👍
- `THINKING_FACE` 🤔
- `FACE_WITH_TEARS_OF_JOY` 😂
- `CRYING_FACE` 😢
- `CHECK_MARK_BUTTON` ✅
- `CROSS_MARK_BUTTON` ❌

### **Shapes and Symbols**
- `BLACK_CIRCLE` ●
- `WHITE_CIRCLE` ○
- `BLACK_SQUARE` ■
- `WHITE_SQUARE` □
- `TRIANGLE_UP` ▲
- `TRIANGLE_DOWN` ▼
- `SPADE` ♠
- `HEART_SHAPE` ♥
- `CLUB` ♣
- `DIAMOND_SHAPE` ♦

### **Miscellaneous**
- `CHECK_MARK` ✓
- `CROSS_MARK` ✗
- `COPYRIGHT` ©
- `REGISTERED` ®
- `TRADEMARK` ™
- `SECTION` §
- `DEGREE` °
- `BULLET` •
- `ELLIPSIS` …
- `INFINITY_SYMBOL` ∞
- `WARNING_SIGN` ⚠
- `BIOHAZARD` ☣
- `PEACE_SYMBOL` ☮
- `YIN_YANG` ☯

### **Typography and Punctuation**
- `EN_DASH` –
- `EM_DASH` —
- `SINGLE_QUOTE_LEFT` ‘
- `SINGLE_QUOTE_RIGHT` ’
- `DOUBLE_QUOTE_LEFT` “
- `DOUBLE_QUOTE_RIGHT` ”
- `DAGGER` †
- `DOUBLE_DAGGER` ‡

---

## ⚙️ Methods

### `getAll()`
Returns an associative array of all defined Unicode constants.

```php
print_r(Unicode::getAll());
```

Output Example:
```php
Array
(
    [LEFT_ARROW] => ←
    [RIGHT_ARROW] => →
    [UP_ARROW] => ↑
    [DOWN_ARROW] => ↓
    [INFINITY] => ∞
    [SMILEY_FACE] => ☺
    [HEART] => ❤
)
```

---

## 🌐 Compatibility

- PHP 7.3 and above

---

---

## 🔥 Example

```php
use Rayblair\Unicode;

echo "Arrows: " . Unicode::LEFT_ARROW . " " . Unicode::RIGHT_ARROW . "\n";
echo "Math Symbols: " . Unicode::INFINITY . " " . Unicode::PI_SYMBOL . "\n";
echo "Emojis: " . Unicode::SMILEY_FACE . " " . Unicode::HEART . "\n";
echo "Shapes: " . Unicode::BLACK_CIRCLE . " " . Unicode::WHITE_SQUARE . "\n";
```

---

## 🚀 Contribution

Contributions are welcome! If you have more Unicode symbols to add or improvements to suggest, feel free to:

1. Fork the repository
2. Create a new branch
3. Make your changes
4. Submit a pull request

---

## ⚖️ License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.

---

## 📞 Contact

For issues or suggestions, feel free to open an issue on GitHub.

---

## ⭐ Support

If you find this project useful, consider giving it a ⭐ on GitHub!
