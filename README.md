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

During install (or update), a `pint.json` file is created in your project root if it does not already exist. To overwrite an existing `pint.json` with the package default, run:

```bash
vendor/bin/pint-rules install --force
```

---

## ⚙️ Usage

1. Use the `pint.json` in your project root (created by the installer), or point Pint to the package config.
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

Rules can be customized in your `pint.json`; see the [Laravel Pint documentation](https://laravel.com/docs/pint) for available rules and configuration.

---

## ⚙️ Configuration

* Rules can be extended and customized in `pint.json`.
* Supports PHP 8.4+.
* Easy integration with CI/CD (GitHub Actions, GitLab CI, ...).

---

## 🔧 Development & CI

The project uses the same GitHub Actions and Composer scripts as [pekral/php-skeleton](https://github.com/pekral/php-skeleton):

* **`.github/workflows/checkers.yml`** — PHPCS, Pint, Rector, PHPStan, tests with coverage, security audit, composer validate/normalize, XML lint (on push/PR to `master`/`main` and weekly).
* **`.github/workflows/stale.yml`** — Marks and closes stale issues/PRs (daily + manual).
* **`.github/dependabot.yml`** — Weekly updates for Composer and GitHub Actions.

**Local commands (same as CI):**

```bash
composer check   # Full quality pipeline (normalize, phpcs, pint, rector, phpstan, audit, tests)
composer fix     # Apply all automatic fixes (normalize, rector, pint, phpcs)
```



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