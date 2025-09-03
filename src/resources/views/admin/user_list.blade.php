<x-app-layout>
    <x-slot name="title">ユーザー一覧</x-slot>

    <div class="user-list">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>名前</th>
                <th>メールアドレス</th>
                <th></th>
            </tr>
            <tr>
                <td>1</td>
                <td>テスト太郎</td>
                <td>taro@example.com</td>
                <td>
                    <a href="" class="btn-attendance">勤務表</a>
                    <a href="" class="btn-edit">編集</a>
                    <a href="" class="btn-delete">削除</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>テスト花子</td>
                <td>hanako@example.com</td>
                <td>
                    <a href="" class="btn-attendance">勤務表</a>
                    <a href="" class="btn-edit">編集</a>
                    <a href="" class="btn-delete">削除</a>
                </td>
            </tr>
        </table>
        pagination
    </div>
</x-app-layout>