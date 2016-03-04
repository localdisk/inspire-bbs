<?php

class NotfoundTest extends TestCase
{
    /**
     * 404 NotFound テスト
     *
     * @return void
     */
    public function testNotFound()
    {
        // notfound というルートにアクセス
        $result = $this->get('notfound');
        // 404 という文字列があるか
        $result->see(404);
        // ステータスコードは 404 か
        $this->assertEquals(404, $result->response->getStatusCode());
    }
}
