# php-sqlLoginForm
sqlデータベースに保存したユーザー名とパスワードを参照しているログインフォームのサンプルです。
# 使い方
vagrantを用いて仮想環境上にLAMP環境を作成、スクリプトにて自動的にパスワードデータベースを作成します。
※要vagrant-hostsupdaterプラグイン
## 初期化手順
php-sqlLoginForm/vmに移動し、"vagrant up"コマンドを実行します。  
自動的に環境が構築され、環境とデータベースが用意されます。  
シェルが帰ってきたら、"vagrant reload"コマンドを実行し、VMを再起動します。  
VMが起動したら、ブラウザにてhttp://local.devlop.com/login.html  
にアクセスするとメインページに飛びます。  
パスワードデータベースには、次のアカウントを用意しました。  
ID:root pass:root  
ID:admin pass:admin  
ID:foo pass:bar  
ユーザーネームとパスワードが一致していればmainpageに飛び、不一致なら再度入力を促すページに飛びます。  
