<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacarController extends Controller
{
    public function index(Request $request, $nama) {
      $gambar = array(
        '1' => '/0.jpg',
        '2' => '/d.jpg',
        '3' => '/e.jpg',
        '4' => '/f.jpg',
        '5' => '/g.jpg',
        '6' => '/i.jpg',
        '7' => '/j.jpg',
        '8' => '/k.jpg',
        '9' => '/t.jpg',
        '10' => '/u.jpg',
        '11' => '/v.jpg',
        '12' => '/w.jpg',
        '13' => '/x.jpg',
        '14' => '/y.jpg',
        '15' => '/z.jpg'
      );

      $get = array_rand($gambar, 1);

      if($get == 1) {
        $gambar = $gambar[$get];
        $pesan = "Hahahaha pacarnya si {$nama} gak ditemukan :v";
        return view('pacar', ['nama' => $nama, 'gambar' => $gambar, 'pesan' => $pesan, 'request' => $request]);
      }
      else if ($get == 2)
      {
        $gambar = $gambar[$get];
        $pesan = "Wah pacar {$nama} berinisial D keren!";
        return view('pacar', ['nama' => $nama, 'gambar' => $gambar, 'pesan' => $pesan, 'request' => $request]);
      }
      else if ($get == 3)
      {
        $gambar = $gambar[$get];

        $pesan = "Wah pacar {$nama} berinisial E keren!";
        return view('pacar', ['nama' => $nama, 'gambar' => $gambar, 'pesan' => $pesan, 'request' => $request]);
      }
      else if ($get == 4)
      {
        $gambar = $gambar[$get];
        $pesan = "Wah pacar {$nama} berinisial F keren!";
        return view('pacar', ['nama' => $nama, 'gambar' => $gambar, 'pesan' => $pesan, 'request' => $request]);

      }
      else if ($get == 5)
      {
        $gambar = $gambar[$get];
        $pesan = "Wah pacar {$nama} berinisial G keren!";
        return view('pacar', ['nama' => $nama, 'gambar' => $gambar, 'pesan' => $pesan, 'request' => $request]);

      }
      else if ($get == 6)
      {
        $gambar = $gambar[$get];
        $pesan = "Wah pacar {$nama} berinisial I keren!";
        return view('pacar', ['nama' => $nama, 'gambar' => $gambar, 'pesan' => $pesan, 'request' => $request]);

      }
      else if ($get == 7)
      {
        $gambar = $gambar[$get];
        $pesan = "Wah pacar {$nama} berinisial J keren!";
        return view('pacar', ['nama' => $nama, 'gambar' => $gambar, 'pesan' => $pesan, 'request' => $request]);

      }
      else if ($get == 8)
      {
        $gambar = $gambar[$get];
        $pesan = "Wah pacar {$nama} berinisial K keren!";
        return view('pacar', ['nama' => $nama, 'gambar' => $gambar, 'pesan' => $pesan, 'request' => $request]);

      }
      else if ($get == 9)
      {
        $gambar = $gambar[$get];
        $pesan = "Wah pacar {$nama} berinisial T keren!";
        return view('pacar', ['nama' => $nama, 'gambar' => $gambar, 'pesan' => $pesan, 'request' => $request]);

      }
      else if ($get == 10)
      {
        $gambar = $gambar[$get];
        $pesan = "Wah pacar {$nama} berinisial U keren!";
        return view('pacar', ['nama' => $nama, 'gambar' => $gambar, 'pesan' => $pesan, 'request' => $request]);

      }
      else if ($get == 11)
      {
        $gambar = $gambar[$get];
        $pesan = "Wah pacar {$nama} berinisial V keren!";
        return view('pacar', ['nama' => $nama, 'gambar' => $gambar, 'pesan' => $pesan, 'request' => $request]);

      }
      else if ($get == 12)
      {
        $gambar = $gambar[$get];
        $pesan = "Wah pacar {$nama} berinisial W keren!";
        return view('pacar', ['nama' => $nama, 'gambar' => $gambar, 'pesan' => $pesan, 'request' => $request]);

      }
      else if ($get == 13)
      {
        $gambar = $gambar[$get];
        $pesan = "Wah pacar {$nama} berinisial X keren!";
        return view('pacar', ['nama' => $nama, 'gambar' => $gambar, 'pesan' => $pesan, 'request' => $request]);

      }
      else if ($get == 14)
      {
        $gambar = $gambar[$get];
        $pesan = "Wah pacar {$nama} berinisial Y keren!";
        return view('pacar', ['nama' => $nama, 'gambar' => $gambar, 'pesan' => $pesan, 'request' => $request]);

      }
      else if ($get == 15)
      {
        $gambar = $gambar[$get];
        $pesan = "Wah pacar {$nama} berinisial Z keren!";
        return view('pacar', ['nama' => $nama, 'gambar' => $gambar, 'pesan' => $pesan, 'request' => $request]);

      }
      else
      {
        $gambar = '/0.jpg';
        $meta = 'Yah pacar kamu tidak ditemukan :p';
        return view('pacar', ['nama' => $nama, 'gambar' => $gambar, 'pesan' => $pesan, 'request' => $request]);

      }

    }
}
