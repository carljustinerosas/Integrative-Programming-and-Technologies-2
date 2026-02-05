<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses and Subjects</title>
    <style>
        table {
            margin-top: 10px;
            border: 1px solid #000;
            border-collapse: collapse;
            width: 100%;
            table-layout: fixed;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            word-wrap: break-word;
        }
        th {
            background-color: #f0f0f0;
            text-align: left;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>

    <h1>Courses</h1>

    @if($courses->isEmpty())
        <p>No courses found.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Course Name</th>
                    <th>Course Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->course_name }}</td>
                        <td>{{ $course->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <h1>Subjects</h1>

    @if($courses->isEmpty())
        <p>No subjects found.</p>
    @else
        @foreach ($courses as $course)
            @if($course->subjects->isNotEmpty())
                <h3>{{ $course->course_name }}</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Subject Name</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($course->subjects as $subject)
                            <tr>
                                <td>{{ $subject->subject_name }}</td>
                                <td>{{ $subject->subject_description }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No subjects for {{ $course->course_name }}.</p>
            @endif
        @endforeach
    @endif

</body>
</html>
