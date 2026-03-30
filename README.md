# standupcomedy.tokyo

## トラベルシューティング

### docker-compose.yml の修正が反映されない

docker compose up -d --force-recreate
このように、一旦コンテナの削除が必要になる
DBは消えない。心配な場合は、DBをバックアップすること。

### WoddPressを入れてリダイレクトされる場合

8081 のところ、パスが合っているか確認すること
environment:
  WORDPRESS_CONFIG_EXTRA: |
    define('WP_HOME','http://localhost:8081');
    define('WP_SITEURL','http://localhost:8081');