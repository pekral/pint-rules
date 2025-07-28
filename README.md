# pint-rules


[![Latest Version](https://img.shields.io/packagist/v/pekral/pint-rules.svg)](https://packagist.org/packages/pekral/pint-rules)
[![License](https://img.shields.io/packagist/l/pekral/pint-rules.svg)](https://github.com/pekral/pint-rules/blob/master/LICENSE)
[![Downloads](https://img.shields.io/packagist/dt/pekral/pint-rules.svg)](https://packagist.org/packages/pekral/pint-rules)

---

## 🚀 Introduction

**pint-rules** is an extensible package of custom rules for Laravel Pint that helps you maintain consistent code style and high code quality in your PHP projects.

---

## 📦 Installation

```bash
composer require --dev pekral/pint-rules
```

---

## ⚙️ Usage

1. Add a `pint.json` file to your project or use the one provided in this package.
2. Run Pint with this configuration:

```bash
./vendor/bin/pint --config=vendor/pekral/pint-rules/pint.json
```

---

## 📝 Usage Examples

### Code check

```bash
./vendor/bin/pint --config=vendor/pekral/pint-rules/pint.json src/
```

### Automatic fix

```bash
./vendor/bin/pint --config=vendor/pekral/pint-rules/pint.json --fix src/
```

### Example configuration (pint.json)

```json
{
    "preset": "vendor/pekral/pint-rules/pint.json",
    "rules": {
        // Your custom rules here
    }
}
```

### Rule Examples

See the [Example/](Example/) directory for detailed examples of how each rule works, including before/after code samples.

---

## ⚙️ Configuration

* Rules can be extended and customized in `pint.json`.
* Supports PHP 8.4+.
* Easy integration with CI/CD (GitHub Actions, GitLab CI, ...).



---

## ❓ FAQ

**Q: How do I add a custom rule?**
A: Add it to your `pint.json` or extend this package.

**Q: How do I run Pint only on specific folders?**
A: Adjust the path in the Pint command, e.g. `src/`, `app/`.

**Q: How can I contribute?**
A: Open an issue or pull request on GitHub.

---

## 🔗 Further Resources

* [Laravel Pint](https://laravel.com/docs/pint)
* [PHP Coding Standards](https://www.php-fig.org/psr/)

---

## 📝 License

This package is licensed under the MIT license.