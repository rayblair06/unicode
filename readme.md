# Unicode PHP Class

A simple and organized PHP class for handling a variety of Unicode symbols including arrows, mathematical symbols, currency symbols, emojis, shapes, Greek letters, and miscellaneous symbols. This class allows easy access to commonly used Unicode characters for use in web applications, console outputs, or any other PHP projects.

---

## ⚡️ Features

- Easy access to a wide range of Unicode characters
- Categorized constants for better organization:
  - **Arrows**
  - **Mathematical Symbols**
  - **Currency Symbols**
  - **Emojis**
  - **Shapes and Symbols**
  - **Greek Letters**
  - **Miscellaneous Symbols**
- Method to retrieve all Unicode constants in the class

---

## 🚀 Installation

1. Clone the repository or download the `Unicode.php` class.

```bash
composer install rayblair06/unicode
```

---

## 📚 Usage

### Basic Usage
```php
use Rayblair/Unicode;

// Output a right arrow
echo Unicode::RIGHT_ARROW; // Outputs →

// Output a smiley face emoji
echo Unicode::SMILEY_FACE; // Outputs ☺

// Output a heart symbol
echo Unicode::HEART; // Outputs ❤
```

### Get All Constants
```php
$allUnicodes = Unicode::getAll();

print_r($allUnicodes);
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
- `LEFT_RIGHT_ARROW` ↔
- `UP_DOWN_ARROW` ↕
- `CIRCLED_RIGHT_ARROW` ↻
- `LONG_LEFT_ARROW` ⟵
- `LONG_RIGHT_ARROW` ⟶

### **Mathematical Symbols**
- `INFINITY` ∞
- `SUMMATION` ∑
- `SQUARE_ROOT` √
- `APPROXIMATELY_EQUAL` ≈
- `NOT_EQUAL` ≠
- `LESS_THAN_EQUAL` ≤
- `GREATER_THAN_EQUAL` ≥
- `PI_SYMBOL` π

### **Currency Symbols**
- `DOLLAR_SIGN` $
- `EURO_SIGN` €
- `POUND_SIGN` £
- `YEN_SIGN` ¥
- `INDIAN_RUPEE_SIGN` ₹
- `BITCOIN_SIGN` ₿
- `WON_SIGN` ₩

### **Emojis**
- `SMILEY_FACE` ☺
- `HEART` ❤
- `STAR` ★
- `FIRE` 🔥
- `THUMBS_UP` 👍
- `CLAPPING_HANDS` 👏
- `PARTY_POPPER` 🎉
- `THINKING_FACE` 🤔
- `CRYING_FACE` 😢

### **Shapes and Symbols**
- `BLACK_CIRCLE` ●
- `WHITE_CIRCLE` ○
- `BLACK_SQUARE` ■
- `WHITE_SQUARE` □
- `TRIANGLE_UP` ▲
- `TRIANGLE_DOWN` ▼
- `DIAMOND` ◆
- `BLACK_STAR` ★
- `WHITE_STAR` ☆

### **Greek Letters**
- `ALPHA` α
- `BETA` β
- `GAMMA` γ
- `DELTA` δ
- `THETA` θ
- `LAMBDA` λ
- `OMEGA` ω

### **Miscellaneous**
- `CHECK_MARK` ✓
- `CROSS_MARK` ✗
- `COPYRIGHT` ©
- `REGISTERED` ®
- `TRADEMARK` ™
- `SECTION` §
- `PILCROW` ¶
- `DEGREE` °
- `BULLET` •
- `ELLIPSIS` …
- `INFINITY_SYMBOL` ∞

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

- PHP 7.4 and above
- Works on any platform supporting PHP

---

## 🧪 Testing

To test the class, simply use the PHP built-in server:

```bash
php -S localhost:8000
```

Then access the test file in your browser:

```
http://localhost:8000/test.php
```

---

## 🔥 Example

```php
use Rayblair/Unicode;

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

## 🌟 Acknowledgments

- Unicode Consortium for the extensive collection of symbols.
- Community contributors for ideas and symbol suggestions.

---

## 📞 Contact

For issues or suggestions, feel free to open an issue on GitHub or contact me via email at [rayblair06@hotmail.com].

---

## ⭐️ Support

If you find this project useful, consider giving it a ⭐️ on GitHub!

---

Feel free to edit or expand on this `README.md` to better suit your project's needs. If you need any other modifications or features, let me know!
