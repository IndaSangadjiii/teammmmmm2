<?ph

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback; // Pastikan model Feedback ada

class FeedbackController extends Controller
{
    public function submit(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'message' => 'required|string',
        ]);

        // Menyimpan data ke tabel feedback
        Feedback::create($validated);

        return back()->with('success', 'Terima kasih atas kritik dan sarannya!');
    }
}
