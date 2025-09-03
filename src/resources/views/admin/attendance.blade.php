<x-app-layout>
    <x-slot name="title">管理者用ページ</x-slot>

    <div class="attendance">
        <div class="date">
            <div class="previous"><a href="">&lt;</a></div>
            <div class="today">2025-09-02</div>
            <div class="next"><a href="">&gt;</a></div>
        </div>

        <div class="records">
            <table class="table">
                <tr>
                    <th>名前</th>
                    <th>勤務開始</th>
                    <th>勤務終了</th>
                    <th>休憩時間</th>
                    <th>勤務時間</th>
                </tr>
                <tr>
                    <td>テスト太郎</td>
                    <td>09:00</td>
                    <td>18:00</td>
                    <td>01:00</td>
                    <td>08:00</td>
                </tr>
                <tr>
                    <td>テスト花子</td>
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