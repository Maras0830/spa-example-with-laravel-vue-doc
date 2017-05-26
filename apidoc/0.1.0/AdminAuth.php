<?php

class AdminAuth {
  /**
  * @api {post} login 登入
  * @apiParam {String} email Admin Email
  * @apiParam {String} password Admin Password
  * @apiGroup AdminAuth
  * @apiSuccess (回傳) {string} token  admin toekn
  * @apiSuccess (回傳) {timestamp} token_ttl token expired time
  * @apiSuccess (回傳) {object} admin 用戶資料
  * @apiSuccessExample {json} Success-Response: 
  *    HTTP/1.1 200 OK
  *    {
  *      "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL3NwYS1sYXJhdmVsLmRldlwvYXBpXC9hZG1pblwvbG9naW4iLCJpYXQiOjE0OTU3NzQzOTksImV4cCI6MTQ5NTc3Nzk5OSwibmJmIjoxNDk1Nzc0Mzk5LCJqdGkiOiJEbzYyTTA5dVZ4SkFXOE8yIiwidHlwZSI6ImFkbWluIn0.XkpnbSzzeanN8u_PUoBqxirwUbElPaGiZaFmGnDgCvg",
  *      "token_ttl": 1495777999,
  *      "admin": {
  *        "id": 1,
  *        "name": "Bryana Beer 2123",
  *        "email": "maraschen@codingweb.tw"
  *      }
  *    }
  *
  *    HTTP/1.1 200 OK （電子郵件或密碼錯誤）
  *    {
  *      "error": "invalid_credentials",
  *      "status_code": 401
  *    }
  **/
  public function login()

  /**
  * @api {get} me 取得我
  * @apiGroup AdminAuth
  * @apiHeader {String} Authorization Bearer \<Admin access token\>
  * @apiSuccess (回傳) {object} data 用戶資料
  * @apiSuccess (回傳) {int} status_code 狀態代碼
  * @apiSuccess (回傳) {string} message 狀態訊息
  * @apiSuccessExample {json} Success-Response: 
  *    HTTP/1.1 200 OK
  *    {
  *      "data": {
  *        "id": 1,
  *        "name": "Bryana Beer 2123",
  *        "email": "maraschen@codingweb.tw"
  *      },
  *      "status_code": 200,
  *      "message": "successful."
  *    }
  *
  * @apiErrorExample json Error-Response:
  *    HTTP/1.1 401 unauthorizated （Token 過期）
  *    [
  *      "token_expired"
  *    ]
  **/
  public function getMe()
}