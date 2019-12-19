# アカウント

ID: test1@test.com<br>
PW: testtest

# 使用した項目

-   Resourceful CRUD (not RESTful)
-   Auth
    -   パスワードリセット
    -   パスワードのバリデーション
    -   メール認証
    -   Session
-   DB 関連
    -   Migration
    -   Seeder
        -   Faker
        -   ModelFactory
    -   Pagination
        -   Eloquent ORM の場合のみ
-   Eloquent ORM
    -   1 対 多のリレーショナルなデータ出力
    -   Accesor
        -   都道府県(Config に都道府県の配列登録)
-   その他
    -   バリデーション
    -   フラッシュメッセージ
    -   必須入力制御
    -   S3 での画像読み取り / アップロード

# 実装したい

-   記入確認画面
-   戻ったときの値保存
-   画像加工（Intervention Image）
-   管理者機能
-   API
-   Test
-   Archtecture
-   カスタムバリデーション
-   Laravel Scout (Elasticsearch or Algolia)
-   Sort
-   郵便番号から住所の自動入力
-   フォームリクエスト(バリデーション)

# 修正したい箇所

-   エラーメッセージなど、途中まで日本語から英語に直していましたが、あまりにも量が多いの途中から止めました。
-   Form の初期値をまともな値に変更
