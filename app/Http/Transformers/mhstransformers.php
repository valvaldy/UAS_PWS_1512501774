<?php
namespace App\Http\Transformers;

use League\Fractal\TransformerAbstract;
use App\modelmahasiswa;

class mhstransformers extends TransformerAbstract
{
  public function transform(modelmahasiswa $data)
  {
    // ngubah format tampilan di postman
    return [
      'nama' => (string) $data->nama,
      'nim' => (string) $data->nim,
      'tanggal lahir' => (string) $data->tgl_lhr,
      'email' => (string) $data->email,
      'jenis kelamin' => (string) $data->jenkel,
      'alamat' => (string) $data->alamat,
      'no telepon' => (string) $data->tlp,
    ];
  }
}