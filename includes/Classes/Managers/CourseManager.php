<?php

namespace SatowerAcademy\Classes\Managers;


class CourseManager
{

    // Método para crear un curso
    public static function createCourse($course_data)
    {
        // TODO: Desarrollar la lógica para crear un curso, validando los datos 
        // proporcionados (como el título y la descripción). Luego, insertar los
        // datos del curso en la base de datos.
    }

    // Método para obtener un curso por su ID
    public static function getCourse($course_id)
    {
        // TODO: Desarrollar la lógica para obtener un curso utilizando su ID.
        // Debe verificar si el curso existe y devolver los datos del curso.
    }

    // Método para obtener todos los cursos
    public static function getAllCourses()
    {
        // TODO: Desarrollar la lógica para obtener todos los cursos desde la base
        // de datos y devolverlos en formato adecuado (como una lista o un array).
    }

    // Método para actualizar un curso
    public static function updateCourse($course_id, $course_data)
    {
        // TODO: Desarrollar la lógica para actualizar un curso específico en la
        // base de datos. Debe validar los datos y verificar si el curso existe
        // antes de intentar actualizarlo.
    }

    // Método para eliminar un curso
    public static function deleteCourse($course_id)
    {
        // TODO: Desarrollar la lógica para eliminar un curso utilizando su ID.
        // Esto debe eliminar los datos del curso en la base de datos de manera
        // segura.
    }

    // Método para obtener los cursos por categoría
    public static function getCoursesByCategory($category_id)
    {
        // TODO: Desarrollar la lógica para obtener cursos filtrados por una
        // categoría específica, si es que se implementa un sistema de categorías.
    }

    // Método para verificar si un curso está disponible o tiene inscripciones abiertas
    public static function isCourseAvailable($course_id)
    {
        // TODO: Desarrollar la lógica para verificar si un curso está disponible
        // para inscripciones, considerando el estado del curso (activo, cerrado, etc.).
    }

    // Método para registrar un estudiante en un curso
    public static function enrollStudent($course_id, $student_id)
    {
        // TODO: Desarrollar la lógica para inscribir a un estudiante en un curso.
        // Esto implicaría crear una relación entre el estudiante y el curso.
    }

    // Método para verificar si un estudiante está inscrito en un curso
    public static function isStudentEnrolled($course_id, $student_id)
    {
        // TODO: Desarrollar la lógica para verificar si un estudiante ya está inscrito
        // en el curso, devolviendo un booleano o el registro correspondiente.
    }

    // Método para obtener los estudiantes inscritos en un curso
    public static function getEnrolledStudents($course_id)
    {
        // TODO: Desarrollar la lógica para obtener los estudiantes que están inscritos
        // en un curso específico.
    }

    // Método para actualizar el estado de un curso (activo, suspendido, etc.)
    public static function updateCourseStatus($course_id, $status)
    {
        // TODO: Desarrollar la lógica para actualizar el estado del curso (por ejemplo, 
        // activo, suspendido, finalizado) en la base de datos.
    }

    // Método para asignar un instructor a un curso
    public static function assignInstructor($course_id, $instructor_id)
    {
        // TODO: Desarrollar la lógica para asignar un instructor a un curso, 
        // gestionando la relación entre el curso y el instructor.
    }

    // Método para obtener la información del instructor de un curso
    public static function getInstructor($course_id)
    {
        // TODO: Desarrollar la lógica para obtener los detalles del instructor
        // asignado a un curso.
    }

    // Método para obtener la duración total de un curso (en días, horas, etc.)
    public static function getCourseDuration($course_id)
    {
        // TODO: Desarrollar la lógica para calcular la duración total de un curso
        // basándose en las fechas de inicio y finalización.
    }

    // Método para agregar material adicional a un curso (como documentos o videos)
    public static function addCourseMaterial($course_id, $material_data)
    {
        // TODO: Desarrollar la lógica para agregar materiales adicionales a un curso,
        // como documentos, videos u otros recursos multimedia.
    }

    // Método para obtener todos los materiales de un curso
    public static function getCourseMaterials($course_id)
    {
        // TODO: Desarrollar la lógica para obtener los materiales adicionales de un curso,
        // como documentos, videos u otros recursos multimedia.
    }

    // Método para verificar si un curso tiene material multimedia disponible
    public static function hasCourseMaterials($course_id)
    {
        // TODO: Desarrollar la lógica para verificar si un curso tiene material adicional
        // disponible, como videos o documentos.
    }

    // Método para establecer el precio de un curso
    public static function setCoursePrice($course_id, $price)
    {
        // TODO: Desarrollar la lógica para establecer el precio de un curso.
        // Este precio podría ser almacenado en los metadatos del curso.
    }

    // Método para obtener el precio de un curso
    public static function getCoursePrice($course_id)
    {
        // TODO: Desarrollar la lógica para obtener el precio de un curso desde los
        // metadatos o la base de datos.
    }
}
