<?php

namespace SatowerAcademy\Functions\Course;


class CourseAjax
{

    // Método para crear un curso
    public function createCourse()
    {
        // TODO: Recibir los datos del curso a través de la solicitud Ajax.
        // Validar los datos y llamara a `CourseManager::createCourse` para insertar los datos del curso en la base de datos.
    }

    // Método para obtener un curso por su ID
    public function getCourse()
    {
        // TODO: Recibir el ID del curso mediante Ajax, 
        // Validar si el curso existe y luego obtener los datos del curso con `CourseManager::getCourse`.
    }

    // Método para obtener todos los cursos
    public function getAllCourses()
    {
        // TODO: Obtener todos los cursos disponibles usando `CourseManager::getAllCourses` 
        // y devolver la lista en formato JSON.
    }

    // Método para actualizar un curso
    public function updateCourse()
    {
        // TODO: Recibir los datos del curso y el ID mediante Ajax.
        // Llamar a `CourseManager::updateCourse` para actualizar el curso en la base de datos.
    }

    // Método para eliminar un curso
    public function deleteCourse()
    {
        // TODO: Recibir el ID del curso a eliminar mediante Ajax.
        // Llamar a `CourseManager::deleteCourse` para eliminar el curso de la base de datos.
    }

    // Método para obtener los cursos por categoría
    public function getCoursesByCategory()
    {
        // TODO: Recibir el ID de la categoría desde Ajax.
        // Llamar a `CourseManager::getCoursesByCategory` para obtener los cursos en esa categoría y devolverlos en formato JSON.
    }

    // Método para verificar si un curso está disponible para inscripción
    public function isCourseAvailable()
    {
        // TODO: Recibir el ID del curso desde Ajax y verificar su disponibilidad 
        // con `CourseManager::isCourseAvailable`. Devolver una respuesta adecuada.
    }

    // Método para inscribir a un estudiante en un curso
    public function enrollStudent()
    {
        // TODO: Recibir el ID del curso y el ID del estudiante mediante Ajax.
        // Llamar a `CourseManager::enrollStudent` para inscribir al estudiante en el curso.
    }

    // Método para verificar si un estudiante está inscrito en un curso
    public function isStudentEnrolled()
    {
        // TODO: Recibir el ID del curso y el ID del estudiante.
        // Llamar a `CourseManager::isStudentEnrolled` para verificar si el estudiante ya está inscrito en el curso.
    }

    // Método para obtener los estudiantes inscritos en un curso
    public function getEnrolledStudents()
    {
        // TODO: Recibir el ID del curso.
        // Llamar a `CourseManager::getEnrolledStudents` para obtener los estudiantes inscritos en el curso y devolver los datos.
    }

    // Método para actualizar el estado de un curso
    public function updateCourseStatus()
    {
        // TODO: Recibir el ID del curso y el nuevo estado.
        // Llamar a `CourseManager::updateCourseStatus` para actualizar el estado del curso.
    }

    // Método para asignar un instructor a un curso
    public function assignInstructor()
    {
        // TODO: Recibir el ID del curso y el ID del instructor.
        // Llamar a `CourseManager::assignInstructor` para asignar al instructor al curso.
    }

    // Método para obtener la información del instructor de un curso
    public function getInstructor()
    {
        // TODO: Recibir el ID del curso.
        // Llamar a `CourseManager::getInstructor` para obtener la información del instructor asignado al curso.
    }

    // Método para obtener la duración de un curso
    public function getCourseDuration()
    {
        // TODO: Recibir el ID del curso.
        // Llamar a `CourseManager::getCourseDuration` para calcular y devolver la duración total del curso.
    }

    // Método para agregar material adicional a un curso
    public function addCourseMaterial()
    {
        // TODO: Recibir los datos del material (documentos, videos, etc.).
        // Llamar a `CourseManager::addCourseMaterial` para agregar el material al curso.
    }

    // Método para obtener los materiales de un curso
    public function getCourseMaterials()
    {
        // TODO: Recibir el ID del curso.
        // Llamar a `CourseManager::getCourseMaterials` para obtener todos los materiales adicionales del curso.
    }

    // Método para verificar si un curso tiene materiales multimedia
    public function hasCourseMaterials()
    {
        // TODO: Recibir el ID del curso.
        // Llamar a `CourseManager::hasCourseMaterials` para verificar si el curso tiene materiales multimedia.
    }

    // Método para establecer el precio de un curso
    public function setCoursePrice()
    {
        // TODO: Recibir el ID del curso y el precio.
        // Llamar a `CourseManager::setCoursePrice` para establecer el precio en la base de datos.
    }

    // Método para obtener el precio de un curso
    public function getCoursePrice()
    {
        // TODO: Recibir el ID del curso.
        // Llamar a `CourseManager::getCoursePrice` para obtener el precio del curso desde la base de datos.
    }
}
