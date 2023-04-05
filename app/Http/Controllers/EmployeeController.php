<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function supervisores()
    {

        $supervisores = DB::select("CALL lideres");

        return response()->json(
            array(
                'status' => 200,
                'employee' => $supervisores

            )
        );
    }
    public function supervisor($id)
    {
        $supervisor = DB::select("CALL lider(?)", array($id));

        $employees = [];
        foreach ($supervisor as $employee) {
            $employees[] = [
                'id' => $employee->employee_id,
                'firstname' => $employee->firstname,
                'lastname' => $employee->lastname,
            ];
        }

        return response()->json([
            'status' => 200,
            'supervisor' => [
                'id' => $supervisor[0]->supervisor_id,
                'firstname' => $supervisor[0]->supervisor_firstname,
                'lastname' => $supervisor[0]->supervisor_lastname,
                'email' => $supervisor[0]->supervisor_email,
                'phone' => $supervisor[0]->supervisor_phone,
            ],
            'employees' => $employees,
        ]);
    }


    public function employees()
    {

        $employees = DB::select("CALL employees");

        return response()->json(
            array(
                'status' => 200,
                'employee' => $employees

            )
        );
    }

    public function insertEmployees(Request $request)
    {
        if ($request->filled(['firstname', 'lastname', 'email', 'phone', 'birthday', 'supervisedby_id'])) {
            $firstname = $request->input('firstname');
            $lastname = $request->input('lastname');
            $email = $request->input('email');
            $phone = $request->input('phone');
            $birthday = $request->input('birthday');
            $supervisedby_id = $request->input('supervisedby_id');
            DB::insert("INSERT INTO employee (firstname,lastname,email,phone,birthday,supervisedby_id) VALUES (?,?,?,?,?,?)", [$firstname, $lastname, $email, $phone, $birthday, $supervisedby_id]);
    
            return response()->json(
                array(
                    'status' => 201,
                    'mensaje' => 'Registro Creado'
                )
            );
        } else {
            return response()->json(
                array(
                    'status' => 400,
                    'message' => 'Existen campos vacios'
                )
            );
        }
    }
    

    public function updateEmployees(Request $request, $id)
    {
        if ($request->filled(['firstname', 'lastname', 'email', 'phone', 'birthday', 'supervisedby_id'])) {

        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $birthday = $request->input('birthday');
        $supervisedby_id = $request->input('supervisedby_id');

        DB::table('employee')
            ->where('id', $id)
            ->update([
                'firstname' => $firstname,
                'lastname' => $lastname,
                'email' => $email,
                'phone' => $phone,
                'birthday' => $birthday,
                'supervisedby_id' => $supervisedby_id
            ]);
        return response()->json(
            array(
                'status' => 200,
                'mensaje' => 'Registro actualizado'
            )
        );
    }else{
        return response()->json(
            array(
                'status' => 400,
                'message' => 'Existen campos vacios'
            )
        ); 
    }
    }
}
