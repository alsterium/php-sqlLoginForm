# php-sqlLoginForm
sqlデータベースに保存したユーザー名とパスワードを参照しているログインフォームのサンプルです。
# 使い方
vagrantを用いて仮想環境上にLAMP環境を作成、スクリプトにて自動的にパスワードデータベースを作成します。
## 初期化手順
"install.sh"を実行、この際にvagrant-hostsupdaterがインストールされ、仮想マシンが構築されます。  
※hostsupdaterがパスワードを聞いてきたら、端末のパスワードを入力する（macOS）  
VMが起動したら、ブラウザにてhttp://local.devlop.com/login.html  
にアクセスするとメインページに飛びます。  
パスワードデータベースには、次のアカウントを用意しました。  
ID:root pass:root  
ID:admin pass:admin  
ID:foo pass:bar  
ユーザーネームとパスワードが一致していればmainpageに飛び、不一致なら再度入力を促すページに飛びます。  
