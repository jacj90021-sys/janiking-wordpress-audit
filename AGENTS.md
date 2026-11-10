# AGENTS.md — Development commands

## Lint / typecheck / quality checks

PHP lint (per-file):
  php -l <file>

WordPress PHP Coding Standards (if phpcs installed):
  phpcs --standard=WordPress <file>

WordPress PHP Coding Standards auto-fix (if phpcbf installed):
  phpcbf --standard=WordPress <file>

CSS stylelint (if installed):
  npx stylelint "theme/assets/css/**/*.css"

JS ESLint (if installed):
  npx eslint "theme/assets/js/**/*.js"

Envato Theme Check (install plugin in a test WP instance, run from WP admin)

## Tests

No test framework configured yet. Manual QA per documentation/QA-REPORT.md.

## Commit

Commit completed work to GitHub when appropriate; push progress to the configured remote repository.