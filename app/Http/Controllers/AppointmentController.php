namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'date' => 'required|date',
            'department' => 'required|string',
            'phone' => 'required|numeric',
            'message' => 'nullable|string',
        ]);

        // Create a new appointment
        $appointment = new Appointment();
        $appointment->name = $request->input('name');
        $appointment->email = $request->input('email');
        $appointment->date = $request->input('date');
        $appointment->department = $request->input('department');
        $appointment->phone = $request->input('phone');
        $appointment->message = $request->input('message');
        $appointment->save();

        // Redirect or return a response
        return redirect()->back()->with('success', 'Appointment has been submitted successfully.');
    }
}
