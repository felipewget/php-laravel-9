You can change the data that you are inseting on database

// Different data
Task::factory(2)->completed()->create();
Task::factory(2)->uncompleted()->create();

public function completed()
{
    return $this->state(function (array $attributes) {
        return [
            'status' => true
        ];
    });
}

public function uncompleted()
{
    return $this->state(function (array $attributes) {
        return [
            'status' => false
        ];
    });
}

public function tomorrow()
{
    return $this->state(function (array $attributes) {
        return [
            'due_date' => now()->addDay()
        ];
    });
}

public function priority($level = 1)
{
    return $this->state(
        fn (array $attributes) => [
            'priority' => $level
        ]
    );
}