<?php

class UserAuth {
  /**
  * @api {post} login 登入
  * @apiParam {String} email User Email
  * @apiParam {String} password User Password
  * @apiGroup UserAuth
  * @apiSuccess (回傳) {string} token  user toekn
  * @apiSuccess (回傳) {timestamp} token_ttl token expired time
  * @apiSuccess (回傳) {object} user 用戶資料
  * @apiSuccessExample {json} Success-Response: 
  *    HTTP/1.1 200 OK
  *    {
  *      "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL3NwYS1sYXJhdmVsLmRldlwvYXBpXC9sb2dpbiIsImlhdCI6MTQ5NTcxNTIyMywiZXhwIjoxNDk1NzE4ODIzLCJuYmYiOjE0OTU3MTUyMjMsImp0aSI6ImN6czI4SWFHZFpVWG9uUWMiLCJ0eXBlIjoidXNlciJ9.dTD4DmTXu_YvyFvEwXSIFdYHAnlCeS4nZ8N1McTktck",
  *      "token_ttl": 1495718823,
  *      "user": {
  *        "id": 1,
  *        "name": "Miss Eleanora Hermann MD",
  *        "email": "maraschen@codingweb.tw"
  *      }
  *    }
  **/
  public function login()

  /**
  * @api {get} me 取得我
  * @apiGroup UserAuth
  * @apiHeader {String} Authorization Bearer \<User access token\>
  * @apiSuccess (回傳) {object} data 用戶資料
  * @apiSuccess (回傳) {int} status_code 狀態代碼
  * @apiSuccess (回傳) {string} message 狀態訊息
  * @apiSuccessExample {json} Success-Response: 
  *    HTTP/1.1 200 OK
  *    {
  *      "data": {
  *        "id": 1,
  *        "name": "Miss Eleanora Hermann MD",
  *        "email": "maraschen@codingweb.tw"
  *      }
  *    }
  **/
  public function getMe()
}