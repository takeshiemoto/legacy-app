# Ubuntu Sandbox Docker

最小限の Ubuntu コンテナを起動するためのリポジトリです。

## 前提
- Docker for Mac が動作していること

## ビルド
```sh
docker build -t ubuntu-sandbox .
```

## 起動（対話）
```sh
docker run --rm -it --name ubuntu-sandbox -v "$(pwd)":/workspace ubuntu-sandbox
```
- カレントディレクトリを `/workspace` にマウントします
- root の `bash` に入ります

## 起動（バックグラウンド）とログイン
```sh
docker run -d --name ubuntu-sandbox -v "$(pwd)":/workspace ubuntu-sandbox sleep infinity
docker exec -it ubuntu-sandbox bash
```

## 停止・削除
```sh
docker stop ubuntu-sandbox && docker rm ubuntu-sandbox
```
