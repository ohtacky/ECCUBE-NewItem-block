## 【ECCUBE3 プラグイン】新着商品

ECCUBE3のブロックに新商品を追加します。

![サンプル画像](https://github.com/ohtacky/ECCUBE-NewItem/raw/image/1.png)

### How to install

このページの右下の「Download ZIP」からZIPファイルをダウンロード

ECCUBE3管理画面<オーナーズストア<プラグイン<プラグイン一覧

ページ下部の独自プラグイン「プラグインのアップロードはこちら」

ダウンロードしたZIPを選択してアップロード

新規ブロックの追加

コンテンツ管理>ブロック管理>新規入力

ブロック名：newitem　ファイル名:newitem　ブロックデータへNewItemフォルダ内の「newitem.twig」をコピペ

newitemブロックを動的ブロックへ変換

DB内dtb_blockのlogic_flgを0から1に変更

独自プラグインにプラグインが追加されるので、「有効にする」をクリック

以上で8件の新商品(最後からアップされた順)が表示されます。

通常のブロックと同様に編集や差し込む位置の変更が出来ます。
