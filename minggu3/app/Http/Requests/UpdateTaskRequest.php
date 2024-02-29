<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTaskRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            // Aturan validasi untuk bidang 'name':
            'name' => 'required|string|max:100', // Bidang 'name' diperlukan, harus berupa string, dan maksimal 100 karakter.
            
            // Aturan validasi untuk bidang 'description':
            'description' => 'nullable|string', // Bidang 'description' opsional (nullable), harus berupa string.
        ];
        
    }
}
