# Repository Guidelines

## Project Structure & Module Organization
- Root-only project for a minimal Ubuntu Docker sandbox.
- Files:
  - `Dockerfile`: Base image and entrypoint (`bash`).
  - `README.md`: Build/run instructions for Mac.
  - `.gitignore`: Editor/OS, env, logs, temp.
  - `AGENTS.md`: This guide.
- Add app code under `src/` and helper scripts under `scripts/` if needed.

## Build, Test, and Development Commands
- Build image: `docker build -t ubuntu-sandbox .`
- Run interactive: `docker run --rm -it --name ubuntu-sandbox -v "$(pwd)":/workspace ubuntu-sandbox`
- Run background + login:
  - `docker run -d --name ubuntu-sandbox -v "$(pwd)":/workspace ubuntu-sandbox sleep infinity`
  - `docker exec -it ubuntu-sandbox bash`
- Stop/cleanup: `docker stop ubuntu-sandbox && docker rm ubuntu-sandbox`
- Smoke check (example): `docker run --rm ubuntu-sandbox bash -lc 'ls -al /workspace'`

## Coding Style & Naming Conventions
- Dockerfile
  - One instruction per line; group related steps.
  - Prefer pinned base: `FROM ubuntu:24.04`.
  - Package installs: `RUN apt-get update && apt-get install -y <pkgs> && rm -rf /var/lib/apt/lists/*`.
  - Use uppercase for `ENV`, kebab-case for labels.
- Shell scripts (`scripts/*.sh`)
  - Shebang `#!/usr/bin/env bash` and `set -euo pipefail`.
  - Two-space indent, kebab-case filenames (e.g., `init-tools.sh`).
- Image/container naming
  - Image tag `ubuntu-sandbox[:dev]`; container name `ubuntu-sandbox`.

## Testing Guidelines
- No test framework is included. When adding code, provide minimal smoke tests (e.g., run a command inside the container and assert exit 0).
- If introducing a `Makefile`, add `make build`, `make run`, and `make test` targets.

## Commit & Pull Request Guidelines
- Use Conventional Commits: `feat:`, `fix:`, `docs:`, `chore:`, `ci:`.
- Subject is imperative, <= 72 chars; include a concise body when needed.
- PRs should include:
  - What changed and why, sample run commands, any follow-ups.
  - Linked issues (if any) and before/after notes.
  - Build passes (`docker build` succeeds) and self-review.

## Security & Configuration Tips
- Do not bake secrets into the image. Use `--env` or `--env-file` and keep `.env*` untracked.
- Keep images minimal; avoid unnecessary packages. Consider adding a non-root user if running services.
