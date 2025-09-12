# Ubuntu Minimal Docker Environment

最小限の Ubuntu コンテナを起動するためのリポジトリです。

## 前提
- Docker for Mac が動作していること

## ビルド
```sh
docker build -t ubuntu-min .
```

## 起動（対話）
```sh
docker run --rm -it --name ubuntu-min -v "$(pwd)":/workspace ubuntu-min
```
- カレントディレクトリを `/workspace` にマウントします
- root の `bash` に入ります

## 起動（バックグラウンド）とログイン
```sh
docker run -d --name ubuntu-min -v "$(pwd)":/workspace ubuntu-min sleep infinity
docker exec -it ubuntu-min bash
```

## 停止・削除
```sh
docker stop ubuntu-min && docker rm ubuntu-min
```
