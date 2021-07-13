DB::table('users')->where('name', $user->name)->update(array('money' => $money));
