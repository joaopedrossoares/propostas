<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OfferController extends Controller
{

  private function saveFile($uploadedFile, $filename, $path, $firebaseId)
  {
    try {
      
      Storage::disk('s3')->putFileAs(
        $path . $firebaseId,
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
    $firebaseId = $request->id;
    $filename = $uploadedFile->getClientOriginalName();
    $this->saveFile($uploadedFile, $filename, 'files/', $firebaseId);
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

  public function generateLinkToDownload(Request $request) {
     $region = env('AWS_DEFAULT_REGION');
     $bucket = env('AWS_BUCKET');
     $firebaseId = $request->id;
     $filename = $request->filename;
     return "https://s3.$region.amazonaws.com/$bucket/files/$firebaseId/$filename";
  }
}
