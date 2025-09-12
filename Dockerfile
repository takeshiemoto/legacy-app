# syntax=docker/dockerfile:1
FROM ubuntu:24.04

# 作業ディレクトリ（ホストをマウントして使う想定）
WORKDIR /workspace

# デフォルトはシェルに入るだけ（最小構成）
CMD ["bash"]

