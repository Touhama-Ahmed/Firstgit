

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activite;

class ActivitesController extends Controller
{
    public function index()
    {
        $Activites = Activite::all();
        return view('Activites.index')->with('Activites', $Activites);
    }

    public function create()
    {
        return view('Activites.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'theme' => 'required',
            'type' => 'required',
            'resume' => 'required',
            'article' => 'required'
        ]);
        $activite = new Activite;
        $activite->theme = $request->input('theme');
        $activite->Type_Activite = $request->input('type');
        $activite->resume = $request->input('resume');
        $activite->article = $request->input('article');
        $activite->save();
        return $this->index();
    }
}
