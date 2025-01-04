# マルチステージビルドを使用
FROM node:18-alpine AS builder

WORKDIR /app

# package.jsonとpackage-lock.jsonをコピー
COPY package*.json ./

# 開発時は以下をコメントアウト
# RUN npm ci

# ソースコードをコピー
# COPY . .

# 本番ビルド（開発時はコメントアウト）
# RUN npm run build

# 開発環境用の設定
FROM node:18-alpine AS development
WORKDIR /app
EXPOSE 3000
CMD ["npm", "run", "dev"]