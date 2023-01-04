We can set a sequences of state

for eg.:

Task::facotry(5)->sequence(
    ['priority' => 1],
    ['priority' => 2]
)->create();

we can mix as well

Task::facotry(5)->sequence(
    ['priority' => 1],
    ['priority' => 2]
)
->tomorrow()
->create();