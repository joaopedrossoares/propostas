<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OfferController extends Controller
{

  private function saveFile($uploadedFile, $filename, $path)
  {
    try {
      
      Storage::disk('s3')->putFileAs(
        $path . $filename,
        $uploadedFile,
        $filename
      );

      return response()->json([
        'success' => true
      ]);

    } catch (\Exception $e) {

      return response()->json([
        'success' => false,
        'messsage' => $e
      ]);
    }
  }

  private function getRequestedFile($request, $nameParam)
  {
    $uploadedFile = $request->file($nameParam);
    $filename = time() . $uploadedFile->getClientOriginalName();
    $this->saveFile($uploadedFile, $filename, 'files/');
  }

  public function uploadFile(Request $request)
  {
    $filesToUpload = [
      'id_frente',
      'id_verso',
      'holerite_1',
      'holerite_2',
      'holerite_3',
      'ctl_1',
      'clt_2',
      'ctl_3',
    ];
    foreach ($filesToUpload as $value) {
      if ($request->hasFile($value)) {
        $this->getRequestedFile($request, $value);
      }
    }
  }
}
