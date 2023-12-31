<?php

return [

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

	'accepted' => ':attribute phải được chấp nhận.',
	'accepted_if' => ':attribute phải được chấp nhận khi :other là :value.',
	'active_url' => ':attribute phải là một URL hợp lệ.',
	'after' => ':attribute phải là một ngày sau :date.',
	'after_or_equal' => ':attribute phải là một ngày sau hoặc bằng :date.',
	'alpha' => ':attribute chỉ được chứa các ký tự chữ cái.',
	'alpha_dash' => ':attribute chỉ được chứa các ký tự chữ cái, số, dấu gạch ngang và dấu gạch dưới.',
	'alpha_num' => ':attribute chỉ được chứa các ký tự chữ cái và số.',
	'array' => ':attribute phải là một mảng.',
	'ascii' => ':attribute chỉ được chứa các ký tự chữ cái và ký tự đơn byte.',
	'before' => ':attribute phải là một ngày trước :date.',
	'before_or_equal' => ':attribute phải là một ngày trước hoặc bằng :date.',
	'between' => [
		'array' => ':attribute phải có từ :min đến :max phần tử.',
		'file' => ':attribute phải có kích thước từ :min đến :max kilobyte.',
		'numeric' => ':attribute phải có giá trị từ :min đến :max.',
		'string' => ':attribute phải có từ :min đến :max ký tự.',
	],
	'boolean' => ':attribute phải là true hoặc false.',
	'confirmed' => ':attribute không khớp với xác nhận.',
	'current_password' => 'Mật khẩu hiện tại không chính xác.',
	'date' => ':attribute phải là một ngày hợp lệ.',
	'date_equals' => ':attribute phải là một ngày bằng với :date.',
	'date_format' => ':attribute phải khớp với định dạng :format.',
	'decimal' => ':attribute phải có :decimal chữ số sau dấu thập phân.',
	'declined' => ':attribute phải bị từ chối.',
	'declined_if' => ':attribute phải bị từ chối khi :other là :value.',
	'different' => ':attribute và :other phải khác nhau.',
	'digits' => ':attribute phải có :digits chữ số.',
	'digits_between' => ':attribute phải có từ :min đến :max chữ số.',
	'dimensions' => ':attribute có kích thước hình ảnh không hợp lệ.',
	'distinct' => ':attribute có giá trị trùng lặp.',
	'doesnt_end_with' => ':attribute không được kết thúc bằng một trong các giá trị sau: :values.',
	'doesnt_start_with' => ':attribute không được bắt đầu bằng một trong các giá trị sau: :values.',
	'email' => ':attribute phải là một địa chỉ email hợp lệ.',
	'ends_with' => ':attribute phải kết thúc bằng một trong các giá trị sau: :values.',
	'enum' => 'Giá trị :attribute đã chọn không hợp lệ.',
	'exists' => 'Giá trị :attribute đã chọn không hợp lệ.',
	'file' => ':attribute phải là một tệp tin.',
	'filled' => ':attribute phải có giá trị.',
	'gt' => [
		'array' => ':attribute phải có nhiều hơn :value mục.',
		'file' => ':attribute phải lớn hơn :value kilobytes.',
		'numeric' => ':attribute phải lớn hơn :value.',
		'string' => ':attribute phải lớn hơn :value ký tự.',
	],
	'gte' => [
		'array' => ':attribute phải có :value mục hoặc nhiều hơn.',
		'file' => ':attribute phải lớn hơn hoặc bằng :value kilobytes.',
		'numeric' => ':attribute phải lớn hơn hoặc bằng :value.',
		'string' => ':attribute phải lớn hơn hoặc bằng :value ký tự.',
	],


	'image' => ':attribute phải là hình ảnh.',
	'in' => 'Giá trị đã chọn của :attribute không hợp lệ.',
	'in_array' => ':attribute phải tồn tại trong :other.',
	'integer' => ':attribute phải là một số nguyên.',
	'ip' => ':attribute phải là một địa chỉ IP hợp lệ.',
	'ipv4' => ':attribute phải là một địa chỉ IPv4 hợp lệ.',
	'ipv6' => ':attribute phải là một địa chỉ IPv6 hợp lệ.',
	'json' => ':attribute phải là một chuỗi JSON hợp lệ.',
	'lowercase' => ':attribute phải là chữ thường.',
	'lt' => [
		'array' => ':attribute phải có ít hơn :value phần tử.',
		'file' => ':attribute phải nhỏ hơn :value kilobytes.',
		'numeric' => ':attribute phải nhỏ hơn :value.',
		'string' => ':attribute phải có ít hơn :value ký tự.',
	],
	'lte' => [
		'array' => ':attribute không được có nhiều hơn :value phần tử.',
		'file' => ':attribute phải nhỏ hơn hoặc bằng :value kilobytes.',
		'numeric' => ':attribute phải nhỏ hơn hoặc bằng :value.',
		'string' => ':attribute phải có ít hơn hoặc bằng :value ký tự.',
	],
	'mac_address' => ':attribute phải là địa chỉ MAC hợp lệ.',
	'max' => [
		'array' => ':attribute không được có nhiều hơn :max phần tử.',
		'file' => ':attribute không được lớn hơn :max kilobytes.',
		'numeric' => ':attribute không được lớn hơn :max.',
		'string' => ':attribute không được lớn hơn :max ký tự.',
	],
	'max_digits' => ':attribute không được vượt quá :max chữ số.',
	'mimes' => ':attribute phải là một tệp tin có định dạng: :values.',
	'mimetypes' => ':attribute phải là một tệp tin có định dạng: :values.',
	'min' => [
		'array' => ':attribute phải có ít nhất :min phần tử.',
		'file' => ':attribute phải có ít nhất :min kilobytes.',
		'numeric' => ':attribute phải có giá trị tối thiểu là :min.',
		'string' => ':attribute phải có ít nhất :min ký tự.',
	],
	'min_digits' => ':attribute phải có ít nhất :min chữ số.',
	'missing' => ':attribute bị thiếu.',
	'missing_if' => ':attribute bị thiếu khi :other là :value.',
	'missing_unless' => ':attribute bị thiếu trừ khi :other là :value.',
	'missing_with' => ':attribute bị thiếu khi :values có mặt.',
	'missing_with_all' => ':attribute bị thiếu khi :values có mặt.',
	'multiple_of' => ':attribute phải là bội số của :value.',
	'not_in' => 'Giá trị đã chọn cho :attribute không hợp lệ.',
	'not_regex' => 'Định dạng :attribute không hợp lệ.',
	'numeric' => ':attribute phải là một số.',

	'password' => [
		'letters' => ':attribute phải chứa ít nhất một chữ cái.',
		'mixed' => ':attribute phải chứa ít nhất một chữ cái viết hoa và một chữ cái viết thường.',
		'numbers' => ':attribute phải chứa ít nhất một số.',
		'symbols' => ':attribute phải chứa ít nhất một ký tự đặc biệt.',
		'uncompromised' => 'Thông tin :attribute đã xuất hiện trong một vụ rò rỉ dữ liệu. Vui lòng chọn một :attribute khác.',
	],
	'present' => ':attribute phải có mặt.',
	'prohibited' => ':attribute bị cấm.',
	'prohibited_if' => ':attribute bị cấm khi :other là :value.',
	'prohibited_unless' => ':attribute bị cấm trừ khi :other nằm trong :values.',
	'prohibits' => ':attribute cấm :other xuất hiện.',
	'regex' => 'Định dạng :attribute không hợp lệ.',
	'required' => ':attribute là bắt buộc.',
	'required_array_keys' => ':attribute phải chứa các mục cho: :values.',
	'required_if' => ':attribute là bắt buộc khi :other là :value.',
	'required_if_accepted' => ':attribute là bắt buộc khi :other được chấp nhận.',
	'required_unless' => ':attribute là bắt buộc trừ khi :other nằm trong :values.',
	'required_with' => ':attribute là bắt buộc khi :values có mặt.',
	'required_with_all' => ':attribute là bắt buộc khi :values có mặt.',
	'required_without' => ':attribute là bắt buộc khi :values không có mặt.',
	'required_without_all' => ':attribute là bắt buộc khi không có :values nào có mặt.',
	'same' => ':attribute phải khớp với :other.',
	'size' => [
		'array' => ':attribute phải chứa :size mục.',
		'file' => ':attribute phải có kích thước :size kilobytes.',
		'numeric' => ':attribute phải có giá trị :size.',
		'string' => ':attribute phải có độ dài :size ký tự.',
	],
	'starts_with' => ':attribute phải bắt đầu bằng một trong các giá trị sau: :values.',
	'string' => ':attribute phải là một chuỗi.',
	'timezone' => ':attribute phải là múi giờ hợp lệ.',
	'unique' => ':Attribute đã được sử dụng.',
	'uploaded' => ':attribute tải lên không thành công.',
	'uppercase' => ':attribute phải viết hoa.',
	'url' => ':attribute phải là một URL hợp lệ.',
	'ulid' => ':attribute phải là một ULID hợp lệ.',
	'uuid' => ':attribute phải là một UUID hợp lệ.',


	/*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

	'custom' => [
		'attribute-name' => [
			'rule-name' => 'custom-message',
		],
	],

	/*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

	'attributes' => [
		'name' => 'Họ tên',
		'password' => 'Mật khẩu',
		'password_confirmation' => 'Nhập lại mật khẩu',
		'title' => 'Tiêu đề',
		'content' => 'Nội dung',
		'category_id' => 'Danh mục',
		'thumbnail' => 'Ảnh đại diện',
		'short_content' => 'Mô tả ngắn',
		'avatar' => 'Hình đại diện',
	],
];
