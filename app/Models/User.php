<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use App\Notifications\ContentNotification;


class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        // 'name',
        // 'email',
        // 'password',
        'staff_id', 'department_id', 'designation_id', 'first_name', 'last_name', 'father_name', 'mother_name', 'email', 'password', 'password_text', 'gender', 'dob', 'joining_date', 'ending_date', 'phone', 'emergency_phone', 'religion', 'caste', 'mother_tongue', 'marital_status', 'blood_group', 'nationality', 'national_id', 'passport_no', 'country', 'present_province', 'present_district', 'present_village', 'present_address', 'permanent_province', 'permanent_district', 'permanent_village', 'permanent_address', 'education_level', 'graduation_academy', 'year_of_graduation', 'graduation_field', 'experience', 'note', 'basic_salary', 'contract_type', 'work_shift', 'salary_type', 'epf_no', 'bank_account_name', 'bank_account_no', 'bank_name', 'ifsc_code', 'bank_brach', 'tin_no', 'photo', 'signature', 'resume', 'joining_letter', 'is_admin', 'login', 'status', 'created_by', 'updated_by',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Polymorphic relations
    public function roles()
    {
        return $this->morphToMany(Role::class, 'model', 'model_has_roles', 'model_id', 'role_id', 'id', 'id');
    }
}
