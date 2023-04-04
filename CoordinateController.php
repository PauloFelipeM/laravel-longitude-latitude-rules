use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CoordinateController extends Controller
{
    public function create(Request $request)
    {
        Validator::validate($request->all(), [
            'latitude' => ['required', new LatitudeRule],
            'longitude' => ['required', new LongitudeRule],
        ]);
    }
}
