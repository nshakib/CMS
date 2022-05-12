<?php

/*
|--------------------------------------------------------------------------
| Validation Language Lines
|--------------------------------------------------------------------------
|
| The following language lines contain the default error messages used by
| the validator class. Some of these rules have multiple versions such
| as the size rules. Feel free to tweak each of these messages here.
|
*/

return [
    'accepted'             => ':অ্যাট্রিবিউট অবশ্যই গ্রহণ করতে হবে।',
    'active_url'           => ':অ্যাট্রিবিউট একটি বৈধ URL নয়।',
    'after'                => ':অ্যাট্রিবিউটে অবশ্যই :date এর পরের তারিখ থাকতে হবে।',
    'after_or_equal'       => ':অ্যাট্রিবিউটে অবশ্যই :date এর পরে বা সমান একটি তারিখ থাকতে হবে।',
    'alpha'                => ':অ্যাট্রিবিউটে শুধুমাত্র অক্ষর থাকতে পারে।',
    'alpha_dash'           => ':অ্যাট্রিবিউটে শুধুমাত্র অক্ষর, সংখ্যা, ড্যাশ এবং আন্ডারস্কোর থাকতে পারে।',
    'alpha_num'            => ':অ্যাট্রিবিউটে শুধুমাত্র অক্ষর এবং সংখ্যা থাকতে পারে।',
    'array'                => ':অ্যাট্রিবিউটে অবশ্যই একটি অ্যারে থাকতে হবে।',
    'attached'             => ':অ্যাট্রিবিউট ইতিমধ্যে সংযুক্ত আছে।',
    'before'               => ':অ্যাট্রিবিউটে অবশ্যই :date এর আগে একটি তারিখ থাকতে হবে।',
    'before_or_equal'      => ':অ্যাট্রিবিউটে অবশ্যই :date এর আগে বা সমান একটি তারিখ থাকতে হবে।',
    'between'              => [
        'array'   => ':অ্যাট্রিবিউটে অবশ্যই :min থেকে :max সদস্য থাকতে হবে।',
        'file'    => 'অ্যাট্রিবিউট অবশ্যই :মিন থেকে :সর্বোচ্চ কিলোবাইটের মধ্যে হতে হবে।',
        'numeric' => ':অ্যাট্রিবিউট অবশ্যই :min থেকে :max এর মধ্যে হতে হবে।',
        'string'  => ':অ্যাট্রিবিউটে অবশ্যই :min থেকে :max অক্ষরের মধ্যে থাকতে হবে।',
    ],
    'boolean'              => ':Attribute harus bernilai true atau false',
    'confirmed'            => 'Konfirmasi :attribute tidak cocok.',
    'date'                 => ':Attribute bukan tanggal yang valid.',
    'date_equals'          => ':Attribute harus berisi tanggal yang sama dengan :date.',
    'date_format'          => ':Attribute tidak cocok dengan format :format.',
    'different'            => ':Attribute dan :other harus berbeda.',
    'digits'               => ':Attribute harus terdiri dari :digits angka.',
    'digits_between'       => ':Attribute harus terdiri dari :min sampai :max angka.',
    'dimensions'           => ':Attribute tidak memiliki dimensi gambar yang valid.',
    'distinct'             => ':Attribute memiliki nilai yang duplikat.',
    'email'                => ':Attribute harus berupa alamat surel yang valid.',
    'ends_with'            => ':Attribute harus diakhiri salah satu dari berikut: :values',
    'exists'               => ':Attribute yang dipilih tidak valid.',
    'file'                 => ':Attribute harus berupa sebuah berkas.',
    'filled'               => ':Attribute harus memiliki nilai.',
    'gt'                   => [
        'array'   => ':Attribute harus memiliki lebih dari :value anggota.',
        'file'    => ':Attribute harus berukuran lebih besar dari :value kilobita.',
        'numeric' => ':Attribute harus bernilai lebih besar dari :value.',
        'string'  => ':Attribute harus berisi lebih besar dari :value karakter.',
    ],
    'gte'                  => [
        'array'   => ':Attribute harus terdiri dari :value anggota atau lebih.',
        'file'    => ':Attribute harus berukuran lebih besar dari atau sama dengan :value kilobita.',
        'numeric' => ':Attribute harus bernilai lebih besar dari atau sama dengan :value.',
        'string'  => ':Attribute harus berisi lebih besar dari atau sama dengan :value karakter.',
    ],
    'image'                => ':Attribute harus berupa gambar.',
    'in'                   => ':Attribute yang dipilih tidak valid.',
    'in_array'             => ':Attribute tidak ada di dalam :other.',
    'integer'              => ':Attribute harus berupa bilangan bulat.',
    'ip'                   => ':Attribute harus berupa alamat IP yang valid.',
    'ipv4'                 => ':Attribute harus berupa alamat IPv4 yang valid.',
    'ipv6'                 => ':Attribute harus berupa alamat IPv6 yang valid.',
    'json'                 => ':Attribute harus berupa JSON string yang valid.',
    'lt'                   => [
        'array'   => ':Attribute harus memiliki kurang dari :value anggota.',
        'file'    => ':Attribute harus berukuran kurang dari :value kilobita.',
        'numeric' => ':Attribute harus bernilai kurang dari :value.',
        'string'  => ':Attribute harus berisi kurang dari :value karakter.',
    ],
    'lte'                  => [
        'array'   => ':Attribute harus tidak lebih dari :value anggota.',
        'file'    => ':Attribute harus berukuran kurang dari atau sama dengan :value kilobita.',
        'numeric' => ':Attribute harus bernilai kurang dari atau sama dengan :value.',
        'string'  => ':Attribute harus berisi kurang dari atau sama dengan :value karakter.',
    ],
    'max'                  => [
        'array'   => ':Attribute maksimal terdiri dari :max anggota.',
        'file'    => ':Attribute maksimal berukuran :max kilobita.',
        'numeric' => ':Attribute maksimal bernilai :max.',
        'string'  => ':Attribute maksimal berisi :max karakter.',
    ],
    'mimes'                => ':Attribute harus berupa berkas berjenis: :values.',
    'mimetypes'            => ':Attribute harus berupa berkas berjenis: :values.',
    'min'                  => [
        'array'   => ':Attribute minimal terdiri dari :min anggota.',
        'file'    => ':Attribute minimal berukuran :min kilobita.',
        'numeric' => ':Attribute minimal bernilai :min.',
        'string'  => ':Attribute minimal berisi :min karakter.',
    ],
    'multiple_of'          => ':Attribute harus merupakan kelipatan dari :value',
    'not_in'               => ':Attribute yang dipilih tidak valid.',
    'not_regex'            => 'Format :attribute tidak valid.',
    'numeric'              => ':Attribute harus berupa angka.',
    'password'             => 'Kata sandi salah.',
    'present'              => ':Attribute wajib ada.',
    'prohibited'           => ':Attribute tidak boleh ada.',
    'prohibited_if'        => ':Attribute tidak boleh ada bila :other adalah :value.',
    'prohibited_unless'    => ':Attribute tidak boleh ada kecuali :other memiliki nilai :values.',
    'regex'                => 'Format :attribute tidak valid.',
    'relatable'            => ':Attribute ini mungkin tidak berasosiasi dengan sumber ini.',
    'required'             => ':অ্যাট্রিবিউট প্রয়োজন।',
    'required_if'          => ':Attribute wajib diisi bila :other adalah :value.',
    'required_unless'      => ':Attribute wajib diisi kecuali :other memiliki nilai :values.',
    'required_with'        => ':Attribute wajib diisi bila terdapat :values.',
    'required_with_all'    => ':Attribute wajib diisi bila terdapat :values.',
    'required_without'     => ':Attribute wajib diisi bila tidak terdapat :values.',
    'required_without_all' => ':Attribute wajib diisi bila sama sekali tidak terdapat :values.',
    'same'                 => ':Attribute dan :other harus sama.',
    'size'                 => [
        'array'   => ':Attribute harus mengandung :size anggota.',
        'file'    => ':Attribute harus berukuran :size kilobyte.',
        'numeric' => ':Attribute harus berukuran :size.',
        'string'  => ':Attribute harus berukuran :size karakter.',
    ],
    'starts_with'          => ':Attribute harus diawali salah satu dari berikut: :values',
    'string'               => ':Attribute harus berupa string.',
    'timezone'             => ':Attribute harus berisi zona waktu yang valid.',
    'unique'               => ':Attribute sudah ada sebelumnya.',
    'uploaded'             => ':Attribute gagal diunggah.',
    'url'                  => 'Format :attribute tidak valid.',
    'uuid'                 => ':Attribute harus merupakan UUID yang valid.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'attributes'           => [],
];