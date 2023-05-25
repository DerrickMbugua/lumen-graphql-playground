<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    //
    // users(
    //     "Filters by name. Accepts SQL LIKE wildcards `%` and `_`."
    //     name: String @where(operator: "like")
    //   ): [User!]! @paginate(defaultCount: 10)
}
