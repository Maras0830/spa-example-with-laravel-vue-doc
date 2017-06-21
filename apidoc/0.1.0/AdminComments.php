<?php

class AdminComments {
  /**
  * @api {post} admin/posts/:posts_id/comments 新增留言
  * @apiParam {String} title 標題
  * @apiParam {String} content 內容
  * @apiGroup AdminComments
  * @apiHeader {String} Authorization Bearer \<Admin access token\>
  * @apiSuccess (回傳) {object} data comment
  * @apiSuccessExample {json} Success-Response: 
  *    HTTP/1.1 200 OK
  {
      "data": {
          "id": 261,
          "title": "reply LaravelConf",
          "content": "Hello",
          "time_ago": "just now",
          "author": {
              "data": {
                  "id": 1,
                  "name": "Miss Eleanora Hermann MD",
                  "email": "maraschen@codingweb.tw",
                  "type": "Admin"
              }
          },
          "sub_comments": {
              "data": []
          }
      }
  }
  * @apiError NotFound 文章不存在
  {
    "message": "Post not found",
    "status_code": 404
  }
  **/
  public function postComment()

    /**
  * @api {post} admin/posts/:posts_id/comments/:comments_id 新增子留言
  * @apiParam {String} title 標題
  * @apiParam {String} content 內容
  * @apiGroup AdminComments
  * @apiHeader {String} Authorization Bearer \<Admin access token\>
  * @apiSuccess (回傳) {object} data comment
  * @apiSuccessExample {json} Success-Response: 
  *    HTTP/1.1 200 OK
  {
      "data": {
          "id": 264,
          "title": "reply LaravelConf",
          "content": "Hello",
          "time_ago": "just now",
          "author": {
              "data": {
                  "id": 1,
                  "name": "Miss Eleanora Hermann MD",
                  "email": "maraschen@codingweb.tw",
                  "type": "Admin"
              }
          },
          "sub_comments": {
              "data": []
          }
      }
  }
  * @apiError NotFound 文章不存在
  {
    "message": "Post not found",
    "status_code": 404
  }
  * @apiError NotFound 留言不存在
  {
    "message": "Comment not found",
    "status_code": 404
  }
  **/
  public function postSubComment()

  /**
  * @api {put} admin/posts/:posts_id/comments/:comments_id 更新留言
  * @apiParam {String} title 標題
  * @apiParam {String} content 內容
  * @apiGroup AdminComments
  * @apiHeader {String} Authorization Bearer \<Admin access token\>
  * @apiSuccess (回傳) {object} data comment
  * @apiSuccessExample {json} Success-Response: 
  *    HTTP/1.1 200 OK
  {
      "data": {
          "id": 3,
          "title": "reply LaravelConf",
          "content": "Hello",
          "time_ago": "3 weeks ago",
          "author": {
              "data": {
                  "id": 1,
                  "name": "Miss Eleanora Hermann MD",
                  "email": "maraschen@codingweb.tw",
                  "type": "Admin"
              }
          },
          "sub_comments": {
              "data": [
                  {
                      "id": 11,
                      "title": "[Title]non",
                      "content": "[Content]Id et velit voluptate neque veritatis. Et facere nihil veniam eaque qui. Quibusdam eum tenetur sunt facere.",
                      "time_ago": "3 weeks ago",
                      "author": {
                          "data": {
                              "id": 12,
                              "name": "Adrian Ullrich",
                              "email": "sasha94@example.org",
                              "type": "Admin"
                          }
                      },
                      "sub_comments": {
                          "data": []
                      }
                  },
                  {
                      "id": 12,
                      "title": "[Title]ipsa",
                      "content": "[Content]Illum non quidem et in labore veritatis quaerat. Accusantium laboriosam recusandae inventore explicabo numquam. Qui officia ex sed eveniet iste aut.",
                      "time_ago": "3 weeks ago",
                      "author": {
                          "data": {
                              "id": 12,
                              "name": "Adrian Ullrich",
                              "email": "sasha94@example.org",
                              "type": "Admin"
                          }
                      },
                      "sub_comments": {
                          "data": []
                      }
                  }
              ]
          }
      }
  }
  * @apiError NotFound 文章不存在
  {
    "message": "Post not found",
    "status_code": 404
  }
  * @apiError NotFound 留言不存在
  {
    "message": "Comment not found",
    "status_code": 404
  }
  **/
  public function putComment()

  /**
  * @api {delete} admin/posts/:posts_id/comments/:comments_id 刪除留言
  * @apiGroup AdminComments
  * @apiHeader {String} Authorization Bearer \<Admin access token\>
  * @apiSuccessExample {json} Success-Response: 
  * HTTP/1.1 202 Accepted
  * @apiError NotFound 文章不存在
  {
    "message": "Post not found",
    "status_code": 404
  }
  * @apiError NotFound 留言不存在
  {
    "message": "Comment not found",
    "status_code": 404
  }
  **/
  public function deleteComment()
}