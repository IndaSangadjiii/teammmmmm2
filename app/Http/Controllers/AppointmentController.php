<?ph

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function create()
    {
        return view('appointments.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'doctor' => 'required|string|max:255',
        ]);

        Appointment::create($validated);

        return redirect()->route('home')->with('success', 'Janji temu berhasil dibuat!');
    }

    public function jadwalDokter()
    {
        return view('jadwal-dokter');
    }
}
