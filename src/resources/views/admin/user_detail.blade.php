<x-app-layout>
    <x-slot name="title">ユーザー詳細</x-slot>

    <div class="attendance">
        <div class="user_name">ユーザー名：テスト太郎</div>

        <div class="records">
            <table class="table">
                <tr>
                    <th>日付</th>
                    <th>勤務開始</th>
                    <th>勤務終了</th>
                    <th>休憩時間</th>
                    <th>勤務時間</th>
                </tr>
                <tr>
                    <td>2025-09-01</td>
                    <td>09:00</td>
                    <td>18:00</td>
                    <td>01:00</td>
                    <td>08:00</td>
                </tr>
                <tr>
                    <td>2025-09-02</td>
                    <td>09:15</td>
                    <td>18:30</td>
                    <td>01:15</td>
                    <td>08:00</td>
                </tr>
            </table>
        </div>
        pagination
    </div>
</x-app-layout>