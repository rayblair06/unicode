# Unicode PHP Class

A well-structured and easy-to-use PHP class providing access to Unicode utilities. This class allows working with Unicode characters in a **type-safe and explicit** manner for PHP applications by providing constants and methods to retrieve subsets of characters, escape Unicode sequences, and more.

---

## ⚡ Features

- **Unicode constants** for type-safe and explicit declarations 
- **Retrieve all Unicode constants** defined in the class
- **Fetch a subset of Unicode constants** by count or range
- **Convert UTF-8 characters to Unicode escape sequences**
- **Provides structured access** to Unicode symbols
- **Ensures strict type safety for better maintainability**

---


## 🔥 Example

```php
use Rayblair\Unicode\Unicode;

echo Unicode::HYPHEN_MINUS; // Outputs: -

$mappings = [
    Unicode::EN_DASH => Unicode::HYPHEN_MINUS,
    Unicode::EM_DASH => Unicode::HYPHEN_MINUS,
];
```

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
use Rayblair\Unicode\Unicode;

// Get single Unicode constant
print_r(Unicode::HYPHEN_MINUS); // Outputs: -

// Get all Unicode constants
print_r(Unicode::getAll());

// Get first 10 Unicode constants
print_r(Unicode::get(10));

// Get Unicode characters within a specific range
print_r(Unicode::range('0041', '0044'));

// Convert UTF-8 characters into Unicode escape sequences
echo Unicode::escape('A'); // Outputs \u0041
```

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
    [LATIN_CAPITAL_LETTER_A] => A
    [LATIN_CAPITAL_LETTER_B] => B
    [LATIN_SMALL_LETTER_A] => a
)
```

### `get(int $count)`
Returns a subset of Unicode constants up to the given count.
```php
print_r(Unicode::get(5));
```

### `range(string $start, string $end)`
Returns a subset of Unicode constants within a specified Unicode hex range.
```php
print_r(Unicode::range('0041', '0044'));
```
Output:
```php
Array
(
    [LATIN_CAPITAL_LETTER_A] => A
    [LATIN_CAPITAL_LETTER_B] => B
    [LATIN_CAPITAL_LETTER_C] => C
    [LATIN_CAPITAL_LETTER_D] => D
)
```

### `escape(string $utf8String)`
Converts UTF-8 characters into Unicode escape sequences (`\uXXXX`).
```php
echo Unicode::escape('Hello, 😊!'); // Outputs: \u0048\u0065\u006c\u006c\u006f, \u1F60A!
```

---

## 🌍 Compatibility

- PHP 8.0 and above

---

## 🚀 Contribution

Contributions are welcome! If you have improvements or additional Unicode symbols to add, feel free to:

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

