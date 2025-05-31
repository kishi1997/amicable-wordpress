## 自分のプロジェクトにクローン
```
git clone https://github.com/user/example-repo.git [my-project]
```

### リモートリポジトリの変更
```
git remote remove origin
```

### 新しく作成したリポジトリと繋ぐ(push an existing repository from the command line)
```
git remote add origin [your-repo-url]
git branch -M main
git push -u origin main
```

## ローカル環境の立ち上げ（Dockerインストール済み）

<!-- Dockerコンテナの起動 -->

docker-compose up -d

<!-- Dockerコンテナの停止 -->

docker-compose down
