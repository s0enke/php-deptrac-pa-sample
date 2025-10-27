## Guidelines

- Strict TDD: Red-green-refactor
- Always run tests
- Always run static code analysis
- Always run architecture analysis (deptrac)
- Small commits, differentiate commits between e.g. bugfixes, features, chores, refactorings (conventional commits)

## Run tests

```bash
docker compose run --rm php vendor/bin/phpunit
```

## Run static code analysis

```bash
docker compose run --rm php vendor/bin/phpstan analyze
```

## Run architecture analysis

```bash
docker compose run --rm php vendor/bin/deptrac analyze
```
