<?php

class Posts {

  /**
  * @api {post} admin/posts 新增文章
  * @apiGroup AdminPosts
  * @apiSuccess (回傳) {object} posts 文章
  * @apiSuccessExample {json} Success-Response: 
  *    HTTP/1.1 200 OK
  {
      "data": {
          "id": 11,
          "title": "Hello",
          "content": "123123123",
          "created_at": {
              "date": "2017-06-16 19:34:16.000000",
              "timezone_type": 3,
              "timezone": "UTC"
          },
          "time_ago": "1 second ago",
          "url": "http://spa-laravel.dev/api/posts/11",
          "author": {
              "data": {
                  "id": 1,
                  "name": "Bryana Beer 2123",
                  "email": "maraschen@codingweb.tw"
              }
          },
          "comments": {
              "data": []
          }
      }
  }
  * @apiVersion 0.1.0
  */
  public function getPosts() {} 

  /**
  * @api {get} admin/posts/:post_id 更新文章
  * @apiGroup AdminPosts
  * @apiSuccess (回傳) {object} post 文章列表
  * @apiSuccessExample {json} Success-Response: 
  *    HTTP/1.1 200 OK
  {
      "data": {
          "id": 1,
          "title": "Hello LaravelConf2017",
          "content": "Hello LaravelConf",
          "created_at": {
              "date": "2017-05-25 10:42:10.000000",
              "timezone_type": 3,
              "timezone": "UTC"
          },
          "time_ago": "3 weeks ago",
          "url": "http://spa-laravel.dev/api/posts/1",
          "author": {
              "data": {
                  "id": 5,
                  "name": "Jasen Durgan",
                  "email": "delphine.schowalter@example.com"
              }
          },
          "comments": {
              "data": [
                  {
                      "id": 1,
                      "title": "[Title]cupiditate",
                      "content": "[Content]Sunt vel reiciendis fugiat explicabo sint enim saepe. Eligendi quia facilis omnis aut commodi nihil harum. Et repellendus officiis repudiandae. Quisquam facere nobis sapiente ipsum nesciunt in.",
                      "time_ago": "3 weeks ago",
                      "author": {
                          "data": {
                              "id": 12,
                              "name": "Conrad Considine",
                              "email": "taltenwerth@example.com",
                              "type": "Admin"
                          }
                      },
                      "sub_comments": {
                          "data": []
                      }
                  },
                  {
                      "id": 2,
                      "title": "[Title]quibusdam",
                      "content": "[Content]Sapiente nesciunt occaecati quaerat. Ut vero quos ipsam nobis necessitatibus. Nam praesentium ipsum totam dolor. Blanditiis similique consequatur provident.",
                      "time_ago": "3 weeks ago",
                      "author": {
                          "data": {
                              "id": 12,
                              "name": "Conrad Considine",
                              "email": "taltenwerth@example.com",
                              "type": "Admin"
                          }
                      },
                      "sub_comments": {
                          "data": []
                      }
                  },
                  {
                      "id": 3,
                      "title": "[Title]velit",
                      "content": "[Content]Quo repellendus quos et dolor ipsum porro perspiciatis dolore. Quam omnis labore totam eligendi doloribus culpa maiores. Itaque laboriosam numquam minima aut.",
                      "time_ago": "3 weeks ago",
                      "author": {
                          "data": {
                              "id": 11,
                              "name": "Verda Funk",
                              "email": "durgan.riley@example.com",
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
                  },
                  {
                      "id": 4,
                      "title": "[Title]ut",
                      "content": "[Content]Voluptatem dolorum quos et. Et nam voluptatem assumenda tempora non autem. Occaecati vero ea et consequuntur ut. Dolor ratione maxime ad voluptas eveniet.",
                      "time_ago": "3 weeks ago",
                      "author": {
                          "data": {
                              "id": 11,
                              "name": "Verda Funk",
                              "email": "durgan.riley@example.com",
                              "type": "Admin"
                          }
                      },
                      "sub_comments": {
                          "data": [
                              {
                                  "id": 13,
                                  "title": "[Title]iusto",
                                  "content": "[Content]Totam quas et sunt dolorem. Incidunt consequatur dicta delectus ut assumenda. Sapiente expedita ut expedita ut aut ratione. Quidem inventore commodi voluptas minima assumenda consequatur rerum esse.",
                                  "time_ago": "3 weeks ago",
                                  "author": {
                                      "data": {
                                          "id": 13,
                                          "name": "Ms. Maudie Goodwin",
                                          "email": "howell.joan@example.net",
                                          "type": "Admin"
                                      }
                                  },
                                  "sub_comments": {
                                      "data": []
                                  }
                              },
                              {
                                  "id": 14,
                                  "title": "[Title]possimus",
                                  "content": "[Content]Ut numquam tempora at id. Cum molestiae aut quidem alias dolor amet. Vitae incidunt maxime ut voluptas.",
                                  "time_ago": "3 weeks ago",
                                  "author": {
                                      "data": {
                                          "id": 13,
                                          "name": "Ms. Maudie Goodwin",
                                          "email": "howell.joan@example.net",
                                          "type": "Admin"
                                      }
                                  },
                                  "sub_comments": {
                                      "data": []
                                  }
                              }
                          ]
                      }
                  },
                  {
                      "id": 5,
                      "title": "[Title]veniam",
                      "content": "[Content]Quo quo aut facere reiciendis et provident est. Eveniet voluptatibus molestias et maiores vel eos voluptas. Modi in sunt voluptatem nisi eum aut error.",
                      "time_ago": "3 weeks ago",
                      "author": {
                          "data": {
                              "id": 11,
                              "name": "Verda Funk",
                              "email": "durgan.riley@example.com",
                              "type": "Admin"
                          }
                      },
                      "sub_comments": {
                          "data": [
                              {
                                  "id": 15,
                                  "title": "[Title]velit",
                                  "content": "[Content]Vitae accusamus odit sed eos ut voluptas temporibus vero. Inventore consectetur et voluptates mollitia minima eum. Laudantium veniam odio ducimus.",
                                  "time_ago": "3 weeks ago",
                                  "author": {
                                      "data": {
                                          "id": 14,
                                          "name": "Sebastian Prosacco",
                                          "email": "gerhold.chelsey@example.org",
                                          "type": "Admin"
                                      }
                                  },
                                  "sub_comments": {
                                      "data": []
                                  }
                              },
                              {
                                  "id": 16,
                                  "title": "[Title]ex",
                                  "content": "[Content]Et quae voluptatem ea nihil porro pariatur. Laboriosam cumque facere dicta expedita natus nisi. Libero aut quia fuga.",
                                  "time_ago": "3 weeks ago",
                                  "author": {
                                      "data": {
                                          "id": 14,
                                          "name": "Sebastian Prosacco",
                                          "email": "gerhold.chelsey@example.org",
                                          "type": "Admin"
                                      }
                                  },
                                  "sub_comments": {
                                      "data": []
                                  }
                              }
                          ]
                      }
                  },
                  {
                      "id": 6,
                      "title": "[Title]vel",
                      "content": "[Content]Aliquid iusto aut voluptas consequatur ea. Doloremque qui quo quo sit dolorum qui. Necessitatibus rem doloremque repellat ullam.",
                      "time_ago": "3 weeks ago",
                      "author": {
                          "data": {
                              "id": 11,
                              "name": "Verda Funk",
                              "email": "durgan.riley@example.com",
                              "type": "Admin"
                          }
                      },
                      "sub_comments": {
                          "data": [
                              {
                                  "id": 17,
                                  "title": "[Title]sit",
                                  "content": "[Content]Debitis eos ut beatae magni suscipit aspernatur numquam. Quod delectus mollitia minus dolores illum distinctio dolorem. Ipsa cumque libero non inventore quisquam qui. Qui officia et animi alias et.",
                                  "time_ago": "3 weeks ago",
                                  "author": {
                                      "data": {
                                          "id": 15,
                                          "name": "Myah Leffler",
                                          "email": "derrick.price@example.com",
                                          "type": "Admin"
                                      }
                                  },
                                  "sub_comments": {
                                      "data": []
                                  }
                              },
                              {
                                  "id": 18,
                                  "title": "[Title]rerum",
                                  "content": "[Content]Necessitatibus cumque sed dolores sed beatae dignissimos eveniet. Qui molestiae et ut est illo. In dolorem reiciendis eum quia quia aut voluptatibus in. Et velit non praesentium ut sequi commodi.",
                                  "time_ago": "3 weeks ago",
                                  "author": {
                                      "data": {
                                          "id": 15,
                                          "name": "Myah Leffler",
                                          "email": "derrick.price@example.com",
                                          "type": "Admin"
                                      }
                                  },
                                  "sub_comments": {
                                      "data": []
                                  }
                              }
                          ]
                      }
                  },
                  {
                      "id": 7,
                      "title": "[Title]vel",
                      "content": "[Content]Nam pariatur vel ea distinctio quia accusamus sit quis. Quis vitae vel officia non. Quo in consequatur aspernatur eligendi excepturi voluptate qui.",
                      "time_ago": "3 weeks ago",
                      "author": {
                          "data": {
                              "id": 11,
                              "name": "Verda Funk",
                              "email": "durgan.riley@example.com",
                              "type": "Admin"
                          }
                      },
                      "sub_comments": {
                          "data": [
                              {
                                  "id": 19,
                                  "title": "[Title]qui",
                                  "content": "[Content]Sit quo quis autem non consequatur vel quibusdam exercitationem. Eum cum asperiores numquam laboriosam et tempora. Vitae ut vel corrupti velit velit.",
                                  "time_ago": "3 weeks ago",
                                  "author": {
                                      "data": {
                                          "id": 16,
                                          "name": "Marianna Jakubowski",
                                          "email": "ywisoky@example.org",
                                          "type": "Admin"
                                      }
                                  },
                                  "sub_comments": {
                                      "data": []
                                  }
                              },
                              {
                                  "id": 20,
                                  "title": "[Title]maxime",
                                  "content": "[Content]Unde quam odit placeat saepe a. Aut officia maiores sit. Cum illo dolor ipsam accusamus praesentium. Magnam quis quos et voluptatibus modi amet nesciunt.",
                                  "time_ago": "3 weeks ago",
                                  "author": {
                                      "data": {
                                          "id": 16,
                                          "name": "Marianna Jakubowski",
                                          "email": "ywisoky@example.org",
                                          "type": "Admin"
                                      }
                                  },
                                  "sub_comments": {
                                      "data": []
                                  }
                              }
                          ]
                      }
                  },
                  {
                      "id": 8,
                      "title": "[Title]magni",
                      "content": "[Content]Rerum eaque ad reprehenderit harum ea. Maiores distinctio explicabo autem eveniet. Saepe excepturi similique ut quaerat mollitia asperiores nam.",
                      "time_ago": "3 weeks ago",
                      "author": {
                          "data": {
                              "id": 11,
                              "name": "Verda Funk",
                              "email": "durgan.riley@example.com",
                              "type": "Admin"
                          }
                      },
                      "sub_comments": {
                          "data": [
                              {
                                  "id": 21,
                                  "title": "[Title]repellat",
                                  "content": "[Content]Ea eum enim aut maiores. Provident blanditiis qui vel dolorem. Ipsum dicta dolor qui quia aut nisi. Eveniet dolore non et voluptatum nisi. Voluptas dolor sint neque error.",
                                  "time_ago": "3 weeks ago",
                                  "author": {
                                      "data": {
                                          "id": 17,
                                          "name": "Gardner Rempel Jr.",
                                          "email": "hrolfson@example.com",
                                          "type": "Admin"
                                      }
                                  },
                                  "sub_comments": {
                                      "data": []
                                  }
                              },
                              {
                                  "id": 22,
                                  "title": "[Title]ipsa",
                                  "content": "[Content]Voluptatem inventore asperiores ipsa odit corporis. Voluptas odit provident consequatur necessitatibus quis.",
                                  "time_ago": "3 weeks ago",
                                  "author": {
                                      "data": {
                                          "id": 17,
                                          "name": "Gardner Rempel Jr.",
                                          "email": "hrolfson@example.com",
                                          "type": "Admin"
                                      }
                                  },
                                  "sub_comments": {
                                      "data": []
                                  }
                              }
                          ]
                      }
                  },
                  {
                      "id": 9,
                      "title": "[Title]earum",
                      "content": "[Content]Quaerat quidem illo expedita nisi assumenda magnam. Voluptatem non eos qui qui. Iusto enim modi ex voluptas.",
                      "time_ago": "3 weeks ago",
                      "author": {
                          "data": {
                              "id": 11,
                              "name": "Verda Funk",
                              "email": "durgan.riley@example.com",
                              "type": "Admin"
                          }
                      },
                      "sub_comments": {
                          "data": [
                              {
                                  "id": 23,
                                  "title": "[Title]non",
                                  "content": "[Content]Velit unde qui et tempora culpa est quod. Vel id ut et quos libero quo. Voluptatibus voluptatem sed sed commodi omnis illo voluptas est. Magni occaecati et perspiciatis ut.",
                                  "time_ago": "3 weeks ago",
                                  "author": {
                                      "data": {
                                          "id": 18,
                                          "name": "Prof. Elenor Breitenberg",
                                          "email": "horacio.gleichner@example.org",
                                          "type": "Admin"
                                      }
                                  },
                                  "sub_comments": {
                                      "data": []
                                  }
                              },
                              {
                                  "id": 24,
                                  "title": "[Title]ut",
                                  "content": "[Content]Quis doloribus doloremque consectetur. Aut natus modi molestias iste voluptas quia quis. Est ipsam nesciunt quis vel dolores.",
                                  "time_ago": "3 weeks ago",
                                  "author": {
                                      "data": {
                                          "id": 18,
                                          "name": "Prof. Elenor Breitenberg",
                                          "email": "horacio.gleichner@example.org",
                                          "type": "Admin"
                                      }
                                  },
                                  "sub_comments": {
                                      "data": []
                                  }
                              }
                          ]
                      }
                  },
                  {
                      "id": 10,
                      "title": "[Title]et",
                      "content": "[Content]Sed quia quia qui aut. Aut ullam consequatur hic sint aut numquam fugit. Sint amet in adipisci ratione impedit ab. Blanditiis architecto in aut sit eos sunt.",
                      "time_ago": "3 weeks ago",
                      "author": {
                          "data": {
                              "id": 11,
                              "name": "Verda Funk",
                              "email": "durgan.riley@example.com",
                              "type": "Admin"
                          }
                      },
                      "sub_comments": {
                          "data": [
                              {
                                  "id": 25,
                                  "title": "[Title]incidunt",
                                  "content": "[Content]Rerum in est est est ex excepturi totam. Quae quasi sunt molestias non sunt sequi. Eius mollitia laboriosam aut sit iure et. Dignissimos sint rerum debitis sed cumque velit esse.",
                                  "time_ago": "3 weeks ago",
                                  "author": {
                                      "data": {
                                          "id": 19,
                                          "name": "Miss Augusta West",
                                          "email": "jany.powlowski@example.org",
                                          "type": "Admin"
                                      }
                                  },
                                  "sub_comments": {
                                      "data": []
                                  }
                              },
                              {
                                  "id": 26,
                                  "title": "[Title]architecto",
                                  "content": "[Content]Harum facilis dolore dolor. Laudantium qui voluptate vitae aperiam magnam nesciunt et eaque. Autem id veniam quis perspiciatis sunt quos.",
                                  "time_ago": "3 weeks ago",
                                  "author": {
                                      "data": {
                                          "id": 19,
                                          "name": "Miss Augusta West",
                                          "email": "jany.powlowski@example.org",
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
              ]
          }
      }
  }
  * @apiError UserNotFound 文章不存在
  {
    "message": "Post not found",
    "status_code": 404
  }
  * @apiVersion 0.1.0
  */
  public function getPost() {} 
}