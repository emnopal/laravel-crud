# Laravel Crud

Route:

| Domain | Method | URI         | Name             | Action                                      | Middleware                                 |
|--------|--------|-------------|------------------|---------------------------------------------|--------------------------------------------|
|        | GET    | HEAD        | /                |                                             | Closure                                    | web          |
|        | GET    | HEAD        | api/user         |                                             | Closure                                    | api,auth:api |
|        | GET    | HEAD        | cast             | cast.index                                  | App\Http\Controllers\CastController@index  | web          |
|        | POST   | cast        | cast.store       | App\Http\Controllers\CastController@store   | web                                        |
|        | GET    | HEAD        | cast/create      | cast.create                                 | App\Http\Controllers\CastController@create | web          |
|        | GET    | HEAD        | cast/{cast}      | cast.show                                   | App\Http\Controllers\CastController@show   | web          |
|        | PUT    | PATCH       | cast/{cast}      | cast.update                                 | App\Http\Controllers\CastController@update | web          |
|        | DELETE | cast/{cast} | cast.destroy     | App\Http\Controllers\CastController@destroy | web                                        |
|        | GET    | HEAD        | cast/{cast}/edit | cast.edit                                   | App\Http\Controllers\CastController@edit   | web          |
|        | GET    | HEAD        | data-table       |                                             | Closure                                    | web          |
|        | GET    | HEAD        | table            |                                             | Closure                                    | web          |

