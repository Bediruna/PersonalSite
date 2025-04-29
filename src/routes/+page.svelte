<script>
    import {  skills, jobs, education, certifications } from '$lib/ResumeData.js';
</script>

<div class="container my-5">
    <a
        style="float: right;"
        href="/Bedir Aygun Resume.pdf"
        download="Bedir Aygun Resume.pdf">Download PDF</a
    >
    <h1>BEDIR AYGUN</h1>
    <h2>SOFTWARE ENGINEER</h2>

    <div>
        <p>
            I am a Software Engineer with more than 8 years of experience.
            Skilled in developing technical solutions and automations to real
            world business problems. Expertise spans front-end web development,
            back-end software engineering, and mobile development. Consistently
            focused on optimizing performance, ensuring code quality, and
            building intuitive user interfaces.
        </p>
    </div>

    <div class="my-3">
        <h2>TECHNICAL PROFICIENCIES</h2>
        {#each skills as skill}
            <div>
                <h5 style="display: inline;">{skill.category}: </h5>
                <span>{skill.items.join(", ")}</span>
            </div>
        {/each}
    </div>

    <div class="my-3">
        <h2>WORK EXPERIENCE</h2>
        {#each jobs as job}
            <div>
                <h5>{job.title}</h5>
                <div class="justify-space">
                    <span>{job.company}</span>
                    <span>{job.period}</span>
                </div>
                <p>{job.description}</p>
                <ul>
                    {#each job.tasks as task}
                        <li>{task}</li>
                    {/each}
                </ul>
            </div>
        {/each}
    </div>

    <div class="my-3">
        <h2>EDUCATION</h2>
        {#each education as edu}
            <div>
                <h5>{edu.degree}</h5>
                <div class="justify-space">
                    <span>{edu.institution}</span>
                    <span>{edu.period}</span>
                </div>
            </div>
        {/each}
    </div>

    <div>
        <h2>CERTIFICATIONS</h2>
        {#each certifications as cert}
            <div>
                <div class="justify-space">
                    <h5>{cert.name}</h5>
                    <span>{cert.date}</span>
                </div>
            </div>
        {/each}
    </div>
</div>
