
<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'         => 'required|unique:books|max:255',
            'price'         => 'required|numeric',
            'description'   => 'required|max:255',
            'cover'         => 'image|mimes:jpeg,jpg,png,gif,bmp,svg|max:1024'
        ];
    }
}


Route::get('file-upload', [FileUploadController::class, 'fileUpload'])->name('file.upload');
Route::post('file-upload', [FileUploadController::class, 'fileUploadPost'])->name('file.upload.post');

namespace App\Http\Controllers;

  

use Illuminate\Http\Request;

  

class FileUploadController extends Controller
{
    
    public function fileUpload()
    {
        return view('fileUpload');
    }

    public function fileUploadPost(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        ]);

        $fileName = time().'.'.$request->file->extension();  
        $request->file->move(public_path('uploads'), $fileName);

        return back()

            ->with('success','You have successfully upload file.')

            ->with('file',$fileName);
    }
}



$value=$request->session()->get('key', 'default');

$value=$request->session()->get('key', function () {
    return 'default';
});


Route::get('home', function () {
    // Recupérer  valeur by clé
    $value=session('key');
    // Specifier une valeur par défault 
    $value=session('key', 'default');
    // Stocker valeur dans key
    session(['key' => 'value']);
});




public function show(Request $request, $id)
{
    $value=$request->session()->get('key');
}



// on ajoute le namespace de BookRequest
use App\Http\Requests\BookRequest;

class BookController extends Controller {

    // on précise le type de $request, qui est un objet de la Class BookRequest maintenant
    public function store(BookRequest $request) {
        //
    }
}







?>