<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PermisoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'tipoPermiso' => 'required|in:Dias,Horas',
            'Fecha_Inicial' => 'required_if:tipoPermiso,Dias|date',
            'Fecha_Final' => 'required_if:tipoPermiso,Dias|date|after_or_equal:Fecha_Inicial',
            'Fecha_Horas' => 'required_if:tipoPermiso,Horas|date',
            'Hora_Inicial' => 'required_if:tipoPermiso,Horas|date_format:H:i:s',
            'Hora_Final' => 'required_if:tipoPermiso,Horas|date_format:H:i:s|after_or_equal:Hora_Inicial',
            'motivo' => 'required|string|min:5|max:30', // Ajusta el tamaño máximo según la tabla
            'descripcion' => 'required|string|min:5|max:200', // Ajusta el tamaño máximo según la tabla
        ];
    }

        /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'tipoPermiso.required' => 'El tipo de permiso es obligatorio.',
            'tipoPermiso.in' => 'El tipo de permiso debe ser uno de: Dias, Horas.',
            'Fecha_Inicial.required_if' => 'La fecha inicial es obligatoria cuando el tipo de permiso es Dias.',
            'Fecha_Final.required_if' => 'La fecha final es obligatoria cuando el tipo de permiso es Dias.',
            'Fecha_Horas.required_if' => 'La fecha de horas es obligatoria cuando el tipo de permiso es Horas.',
            'Hora_Inicial.required_if' => 'La hora inicial es obligatoria cuando el tipo de permiso es Horas.',
            'Hora_Final.required_if' => 'La hora final es obligatoria cuando el tipo de permiso es Horas.',
            'motivo.required' => 'El motivo es obligatorio.',
            'motivo.string' => 'El motivo debe ser una cadena de texto.',
            'motivo.min' => 'El motivo debe tener al menos :min caracteres.',
            'descripcion.required' => 'La descripción es obligatoria.',
            'descripcion.string' => 'La descripción debe ser una cadena de texto.',
            'descripcion.min' => 'La descripción debe tener al menos :min caracteres.',
        ];
    }
}
